<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;


class TutorialsController extends Controller
{

    public function index()
    {
        return view('tutorials.index');
    }

    public function show($id)
    {
        return view('tutorials.show');

    }

}
