<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pets;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Hashids\Hashids;
use Carbon\Carbon;

class PetsController extends Controller
{

    public function index()
    {
        $pets = Pets::where('id_organization',Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('pets.index',compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {



        $image = 'https://radi-images.s3.us-west-1.amazonaws.com/pet-default.jpeg';

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

        $pet = new Pets([
            'name'              => ucfirst($request->get('name')),
            'photo'             => $image,
            'birthday'          => $request->get('birthday'),
            'description'       => ucfirst($request->get('description')),
            'chronic_disease'   =>  ucfirst($request->get('chronic_disease')),
            'gender'            => $request->get('gender'),
            'specie'            => $request->get('specie'),
            'sterelized'        => $request->get('sterelized'),
            'sterelized_date'   => $request->get('datesterilized'),
            'breed'             => $request->get('breed'),
            'size'              => $request->get('size'),
            'latitude'          => $request->get('latitude')?$request->get('latitude'):Auth::user()->latitude,
            'longitude'         => $request->get('longitude')?$request->get('longitude'):Auth::user()->longitude,
            'color_necklace'    => $request->get('neclacke_color'),
            'weight'            => $request->get('weight'),
            'id_organization'   => Auth::user()->id,
            'status'            => 2
        ]);

        $pet->save();
        return redirect('/pets')->with('success', 'Se ha creado correctamente.');
    }

    public function show(string $hash)
    {

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $pet = Pets::findOrFail($id?$id[0]:0);
        return view('pets.show',compact('pet','hash'));
    }

    public function edit(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $pet = Pets::findOrFail($id?$id[0]:0);
        return view('pets.edit',compact('pet','hash'));
    }

    public function update(Request $request, string $id)
    {

        $pet = Pets::find($id);

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $hash = $hashids->encode($pet->id);

        if($request->get('base') && $request->get('base') != 'data:,'){
            $baseImage = $request->base;
            list($type, $baseImage) = explode(';', $baseImage);
            list(, $baseImage)      = explode(',', $baseImage);
            $baseImage = base64_decode($baseImage);


             $filePath = 'org/' .  Str::random(14).'_'.'radi-pet-shelters';
            $path = Storage::disk('s3')->put($filePath,$baseImage);
            $path = Storage::disk('s3')->url($path);
            $image   = 'https://radi-images.s3.us-west-1.amazonaws.com/'.$filePath;
            $pet->photo                  = $image;
        }

        $pet->name                   = $request->get('name');
        $pet->birthday               = Carbon::parse($request->birthday);
        $pet->description            = $request->get('description');
        $pet->chronic_disease        = $request->get('chronic_disease');
        $pet->gender                 = $request->get('gender');
        $pet->latitude               = $request->get('latitude');
        $pet->longitude              = $request->get('longitude');
        $pet->specie                 = $request->get('specie');
        $pet->sterelized             = $request->get('sterelized');
        $pet->sterelized_date        = $request->get('sterelized_date');
        if($request->get('breed')){
            $pet->breed                  = $request->get('breed');
        }
        $pet->size                   = $request->get('size');
        $pet->color_necklace         = $request->get('color_necklace');
        $pet->weight                 = $request->get('weight');


        $pet->update();
        return redirect('/pets/'.$hash.'/edit')->with('success', 'Se ha actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        //
    }
}
