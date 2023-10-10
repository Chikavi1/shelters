<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use SEO;

class ProfileController extends Controller
{

        public function editar(){
            SEO::setTitle('Perfil | '.Auth::user()->name);
            SEO::opengraph()->addImage(asset('img/thumbnail.png'));
            SEO::twitter()->setImage(asset('img/thumbnail.png'));
            SEO::setDescription('Plataforma para ayudar a las organizaciones o refugios a gestionar sus adopciones, perfiles de mascotas y más.');
            SEO::opengraph()->setUrl('https://org.radi.pet/');
            SEO::setCanonical('https://org.radi.pet/');
            $social = json_decode(Auth::user()->social_media);
            return view('profile.editar',compact('social'));
        }

        public function sign(){
            return view('profile.sign');
        }

        public function storeSign(Request $req){
            $org = User::find(Auth::user()->id);
            $org->sign = $req->get('sign');
            $org->update();
            return redirect('/profile/')->with('success', 'Se ha actualizado la firma correctamente.');
        }

        public function actualizar(Request $request){
            $org = User::find(Auth::user()->id);
            if($request->get('base') && $request->get('base') != 'data:,'){
                $baseImage = $request->base;
                list($type, $baseImage) = explode(';', $baseImage);
                list(, $baseImage)      = explode(',', $baseImage);
                $baseImage = base64_decode($baseImage);
                $filePath = 'laravel/' .  Str::random(14).'_'.'radi-shelters';
                $path = Storage::disk('s3')->put($filePath,$baseImage);
                $path = Storage::disk('s3')->url($path);
                $image   = 'https://radi-images.s3.us-west-1.amazonaws.com/'.$filePath;
                $org->photo                  = $image;
            }

            $org->name                   = $request->get('name');
            $org->cellphone              = $request->get('cellphone');
            $org->description            = $request->get('description');
            $org->latitude               = $request->get('latitude')?$request->get('latitude'):Auth::user()->latitude;
            $org->longitude              = $request->get('longitude')?$request->get('longitude'):Auth::user()->longitude;
            $org->address              = $request->get('address');


            $org->bank_name              = $request->get('bank_name');
            $org->bank_account           = $request->get('bank_account');
            $org->bank_card              = $request->get('bank_card');

            $org->volunteers              = $request->get('volunteers');
            $org->main_link               = $request->get('main_link');
            $org->wishlist                = $request->get('wishlist');
            $org->volunteers              = $request->get('volunteers');
            $org->recovery_fee            = $request->get('recovery_fee');


            $social_media = array(
                'facebook' => $request->get('facebook_url'),
                'instagram'  => $request->get('instagram_url'),
            );
            $org->social_media =  $social_media;


            $org->update();
            return redirect('/profile/')->with('success', 'Se ha actualizado correctamente.');
        }


    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
            'social' => json_decode(Auth::user()->social_media)
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
