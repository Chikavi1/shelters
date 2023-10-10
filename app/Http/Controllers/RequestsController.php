<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Requests;
use App\Models\Pets;

use PDF;
use Auth;
use App\Models\People;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Hashids\Hashids;
use SEO;


class RequestsController extends Controller
{
    public function index()
    {
        SEO::setTitle('Solicitudes | '.Auth::user()->name);
        SEO::opengraph()->addImage(asset('img/thumbnail.png'));
        SEO::twitter()->setImage(asset('img/thumbnail.png'));
        SEO::setDescription('Plataforma para ayudar a las organizaciones o refugios a gestionar sus adopciones, perfiles de mascotas y más.');
        SEO::opengraph()->setUrl('https://org.radi.pet/');
        SEO::setCanonical('https://org.radi.pet/');
        $requests = Requests::where('id_organization',Auth::user()->id)->orderBy('id', 'desc')->paginate(20);
        return view('requests.index',compact('requests'));
    }

    public function create()
    {
        SEO::setTitle('Crear Solicitudes | '.Auth::user()->name);
        SEO::opengraph()->addImage(asset('img/thumbnail.png'));
        SEO::twitter()->setImage(asset('img/thumbnail.png'));
        SEO::setDescription('Plataforma para ayudar a las organizaciones o refugios a gestionar sus adopciones, perfiles de mascotas y más.');
        SEO::opengraph()->setUrl('https://org.radi.pet/');
        SEO::setCanonical('https://org.radi.pet/');
        return view('requests.create');

    }

    public function store(Request $request)
    {

        $search_user = People::where('email',$request->email)->get()->first();

        if(!$request->pet_id){
            return redirect()->back()->with('error', 'Mascota no valida');
        }
        if($search_user){
            $user_id = $search_user->id;
        }else{
            return redirect()->back()->with('error', 'Usuario no valido');
        }

        if($request->get('base') && $request->get('base') != 'data:,'){
            $baseImage = $request->base;
            list($type, $baseImage) = explode(';', $baseImage);
            list(, $baseImage)      = explode(',', $baseImage);
            $baseImage = base64_decode($baseImage);
            $filePath = 'org/' .  Str::random(14).'_'.'radi-pet-shelters';
            $path = Storage::disk('s3')->put($filePath,$baseImage);
            $path = Storage::disk('s3')->url($path);
            $image   = 'https://radi-images.s3.us-west-1.amazonaws.com/'.$filePath;
        }

        $respuestas = array(
            '0' => $request->response1,
            '1'  => $request->response2,
            '2' => $request->response3,
            '3' => $request->response4,
            '4' => $request->response5,);

          $interview = json_encode($respuestas);


        $req = new Requests([
            'id_user'           =>  $user_id,
            'id_pet'            => $request->get('pet_id'),
            'id_organization'   => Auth::user()->id,
            'status'            => 1,
            'interview'         => $interview,
            'latitude'          => $request->get('latitude'),
            'longitude'         => $request->get('longitude'),
            'address'           => $request->get('address'),
            'id_photo'          => $image
            ]);

        $req->save();
        if($search_user->identification !=  $request->get('identification')){
            $search_user->identification = $request->get('identification');
            $search_user->update();
        }
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->encode($req->id);

        return redirect('/requests/'.$id)->with('success', 'Se ha creado correctamente.');

    }

   public function sign(string $id){

    $request = Requests::findOrFail($id);
    return view('requests.sign',compact('id','request'));
   }

   public function storeSign(Request $req){
        $request = Requests::findOrFail($req->id);
        $request->sign = $req->get('sign');
        $request->update();

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->encode($req->id);

        return redirect('/requests/'.$id)->with('success', 'Se firmó el contrato de adopción.');
   }


    public function show(string $hash)
    {
        SEO::setTitle('Solicitud #'.$hash);
        SEO::opengraph()->addImage(asset('img/thumbnail.png'));
        SEO::twitter()->setImage(asset('img/thumbnail.png'));
        SEO::setDescription('Plataforma para ayudar a las organizaciones o refugios a gestionar sus adopciones, perfiles de mascotas y más.');
        SEO::opengraph()->setUrl('https://org.radi.pet/');
        SEO::setCanonical('https://org.radi.pet/');
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $request = Requests::findOrFail($id?$id[0]:0);
        if($request->interview){
            $request->interview = json_decode($request->interview, true);
        }
        return view('requests.show',compact('request','hash'));
    }

    public function edit(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $request = Requests::findOrFail($id?$id[0]:0);
        SEO::setTitle('Editar Solicitud #'.$hash);
        SEO::opengraph()->addImage(asset('img/thumbnail.png'));
        SEO::twitter()->setImage(asset('img/thumbnail.png'));
        SEO::setDescription('Plataforma para ayudar a las organizaciones o refugios a gestionar sus adopciones, perfiles de mascotas y más.');
        SEO::opengraph()->setUrl('https://org.radi.pet/');
        SEO::setCanonical('https://org.radi.pet/');
        if($request->interview){
            $request->interview = json_decode($request->interview, true);
        }
        return view('requests.edit',compact('request'));
    }

    public function update(Request $request, string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);

        $requestPet = Requests::findOrFail($id?$id[0]:0);
        $respuestas = array(
            '0' => $request->response1,
            '1'  => $request->response2,
            '2' => $request->response3,
            '3' => $request->response4,
            '4' => $request->response5);
        $interview = json_encode($respuestas);
        $requestPet->update();
        return redirect('/requests/'.$hash)->with('success', 'Se ha editado correctamente.');

    }


    public function delivered_pet(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $request = Requests::findOrFail($id?$id[0]:0);
        $request->pet_delivered =  Carbon::now();
        $request->save();
        return redirect('/requests/'.$hash)->with('success', 'Se entrego la mascota.');
    }

    public function cancel(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $request = Requests::findOrFail($id?$id[0]:0);
        $request->status =  0;
        $request->save();
        return redirect('/requests/'.$hash)->with('error', 'Se canceló la solicitud.');
    }

    public function success(string $hash)
    {


        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $request = Requests::findOrFail($id?$id[0]:0);
        $request->status = 2;
        $request->finish_date =  Carbon::now();

        $other_request = Requests::where('id_pet',$request->id_pet)->where('id','!=',$request->id);
        if(count($other_request->get()) != 0){
            $other_request->update(['status' => 0]);
        }

        $data = [
            'title' => 'Contrato de adopción',
            'request' => $request,
        ];


        $data["email"] = $request->users->email;
        $data["title"] = "Adopción en Radi Pets";
        $data["body"]  = "Gracias por adoptar";


        $certificate = PDF::loadView('pdf.certificate', $data)->setPaper('a4', 'landscape');
        $contract = PDF::loadView('pdf.contract', $data);


        Mail::send('mail.demo_mail', $data, function($message)use($data,$certificate,$contract) {
            $message->to($data["email"])
                    ->subject($data["title"]);
                    $message->attachData($certificate->output(), 'Certificado de adopción.pdf');
                    $message->attachData($contract->output(), 'Contrato de adopción.pdf');

        });


        $pet = Pets::findOrFail($request->id_pet);
        $pet->status = 1;
        $pet->id_user = $request->id_user;
        $pet->save();
        $request->save();

        return redirect('/requests/'.$hash)->with('success', '¡¡Se adoptó a la mascota!!');
    }

    public function generatePDF(string $hash,Request $request)
    {

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $request = Requests::findOrFail($id?$id[0]:0);
        if($request->pet_delivered){
            $data = [
                'request' => $request,
            ];
            }else{
                if(Auth::user()->id == $request->id_organization){
                    return redirect('/requests/'.$request->id)->with('error', 'No se ha entregado la mascota');
                }else{
                    abort(404);
                }
        }




        // $certificate = PDF::loadView('pdf.certificate', $data)->setPaper('a4', 'landscape');
        // $contract = PDF::loadView('pdf.contract', $data);

        // $contract =
        return  PDF::loadView('pdf.contract', $data)->stream('contrato.pdf');

        // dd('no pasas ');
        // $data["email"] = "juniko361@gmail.com";
        // $data["title"] = "Adopción en Radi Pets";
        // $data["body"] = "Gracias por adoptar";


        // Mail::send('mail.demo_mail', $data, function($message)use($data,$certificate,$contract) {
        //     $message->to($data["email"])
        //             ->subject($data["title"]);
        //             $message->attachData($certificate->output(), 'Certificado de adopción.pdf');
        //             $message->attachData($contract->output(), 'Contrato de adopción.pdf');

        // });

        // dd('se envio');
    }

    public function pets(Request $request)
    {
        $pets = Pets::where('id_organization',Auth::user()->id)->where('status',2)->get();
        return response()->json($pets);
    }

    public function users(String $id)
    {
        $People = People::where('email',$id)->where('status',1)->select('id','name','photo','identification')->get();
        return response()->json($People);
    }
}
