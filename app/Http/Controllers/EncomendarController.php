<?php

namespace App\Http\Controllers;

use App\mercadorias;
use Illuminate\Http\Request;

class EncomendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Encomendar.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'Morada' => 'required|max:255',
            'img' => 'required|max:255',
            'desc' => 'required',
            'NIF' => 'required|max:12',
        ]);

        $data = $request->all();
        $var = new mercadorias();
        $var->nome = $data['nome'];
        $var->Morada = $data['Morada'];
        $var->img = $data['img'];
        $var->desc = $data['desc'];
        $var->NIF = $data['NIF'];
        $var->save();
        return Redirect('/')->with('fm_success','Encomenda Concluida!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
