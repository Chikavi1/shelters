<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pets;

class PetsController extends Controller
{

    public function index()
    {
        $pets = Pets::paginate(10);
        return view('pets.index',compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $pet = Pets::find($id);
        return view('pets.show',compact('pet'));
    }

    public function edit(string $id)
    {
        return view('pets.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
