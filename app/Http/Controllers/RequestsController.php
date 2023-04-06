<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Requests;
use PDF;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Requests::where('id_organization',1)->paginate();
        return view('requests.index',compact('requests'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('requests.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $request = Requests::find($id);
        return view('requests.show',compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function generatePDF()
    {
        $users = Requests::find(1);

        $data = [
            'title' => 'Contrato de adopción',
            'date' => date('d/m/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('requests.pdf', $data);

        return $pdf->stream();
    }
}
