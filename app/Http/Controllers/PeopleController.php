<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use SEO;

class PeopleController extends Controller
{

    public function create()
    {
        SEO::setTitle('Usuarios | '.Auth::user()->name);
        SEO::opengraph()->addImage(asset('img/thumbnail.png'));
        SEO::twitter()->setImage(asset('img/thumbnail.png'));
        SEO::setDescription('Plataforma para ayudar a las organizaciones o refugios a gestionar sus adopciones, perfiles de mascotas y más.');
        SEO::opengraph()->setUrl('https://org.radi.pet/');
        SEO::setCanonical('https://org.radi.pet/');
        return view('people.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'cellphone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.People::class],
            'gender' => 'required',
        ]);

        $client   = new Client();
        $options = [];
        $uri = 'http://localhost:8080/createCostumer/';
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->cellphone,
          );
        $options['form_params'] = $data;
        $options['http_errors'] = false;
        $response = $client->request('POST', $uri , $options);
        $stripe = json_decode($response->getBody()->getContents(), true);

        $people = new People([
            'name'              =>  $request->get('name'),
            'photo'             => 'https://avatars.dicebear.com/api/initials/'.$request->get('name'),
            'email'             => $request->get('email'),
            'cellphone'         => $request->get('cellphone'),
            'notifications'     => '{"reminder_push":true,"reminder_email":true,"reminder_sms":true,"ad_push":true,"ad_email":true,"ad_sms":true}',
            'country'           => 'Mexico',
            'currency'          => 'MXN',
            'interest'          => '["adoptions"]',
            'coupon'            => 'org-'.Auth::user()->id,
            'customer'          => $stripe['id'],
            'birthday'          => $request->get('birthday'),
            'gender'            => $request->get('gender'),
        ]);

        $people->save();
        return redirect('/requests/create')->with('success', 'Se ha creado correctamente el usuario.');
    }

}
