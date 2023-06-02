<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Pets;
use App\Models\Requests;

use Illuminate\Support\Facades\Hash;
use Mail;


class HomeController extends Controller
{
    public function create(){
        if(Auth::user()->id == 1){
            return view('admin.create');
        }else{
            abort(404);
        }
    }

    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        ]);

        $org = new User([
            'name'           => $request->get('name'),
            'email'          => $request->get('email'),
            'password'       =>  Hash::make($request->get('password'),[
                                'rounds' => 10,
            ]),
            'person_name'    => $request->get('person_name'),
            'cellphone'      => $request->get('cellphone'),
            'volunteers'     => $request->get('volunteers'),
            'description'    => $request->get('description'),
            'address'        => $request->get('address'),
            'latitude'       => $request->get('latitude'),
            'longitude'      => $request->get('longitude'),
            'recovery_fee'   => $request->get('recovery_fee'),
            'address'        => $request->get('address'),
            'social_media'   => '{"facebook":"","instagram":""}',
            'cover'          => 'https://radi.pet/img/default.png',
            'photo'          => 'https://radi.pet/img/default-circle.png',
            'score'          => 1,
            'type'           => 1,
            'count_changes'  => 0,
            'verified'       => 0,
            'configuration'  => '{"volunteers":false,"cellphone":false,"location":false,"visits":false}',
            'status'         => 1
            ]);

        $data["email"] =  $request->get('email');
        $data["title"] = "Bienvenido a Radi Pets para Albergues";
        $data["body"]  = "Bienvenido a Radi Pets para Albergues";

            Mail::send('mail.welcome', $data, function($message)use($data) {
            $message->to($data["email"])
                    ->subject($data["title"]);
        });

        $org->save();
        return redirect('/chikavi/create')->with('success', 'Se ha creado correctamente.');

    }

public function preregister(){
    return view('pre-register');
}

public function faq(){
    return view('home.faq');
}


public function  registerStore(Request $request){
    $data["email"] =  "chikavi@hotmail.com";
    $data["title"] = "ORG| Esta interesado ".$request->shelter;
    $data["body"]  = "Encargado ".$request->name;
    $data["name"]  = $request->get('name');
    $data["shelter"]  = $request->get('shelter');
    $data["cellphone"]  = $request->get('cellphone');
    $data["s_email"] = $request->get('email');


    Mail::send('mail.attetion-register', $data, function($message)use($data) {
        $message->to($data["email"])
        ->subject($data["title"]);
    });

    return redirect('/pre-register')->with('success', 'Se ha creado correctamente.');

}

public function email(){
    // return view('mail.welcome');
    $data["email"] =  'chikavi10@gmail.com';
    $data["title"] = "Bienvenido a Radi Pets para Albergues";
    $data["body"]  = "Bienvenido a Radi Pets para Albergues";



        Mail::send('mail.welcome', $data, function($message)use($data) {
        $message->to($data["email"])
                ->subject($data["title"]);
    });

}

    public function welcome(){
        $pets =    Pets::where('id_organization',Auth::user()->id)->where('status',2)->get()->count();
        $requests = Requests::where('id_organization',Auth::user()->id)->where('status',1)->get()->count();
        return view('dashboard',compact('pets','requests'));
    }
}
