<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use App\Models\Tutorials;


class TutorialsController extends Controller
{

    public function index()
    {
        $tutorials = Tutorials::all();
        return view('tutorials.index',compact('tutorials'));
    }

    public function show($id)
    {
        $tutorial = Tutorials::find($id);
        $steps = json_decode($tutorial->steps, true);
        return view('tutorials.show',compact('tutorial','steps'));

    }

}
