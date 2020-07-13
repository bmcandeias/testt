<?php

namespace App\Http\Controllers;

use App\User;
use App\mercadorias;
use Illuminate\Http\Request;

class MercadoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merc = mercadorias::select()->get();
        $users = User::select()->get();
        return view('Encomendar.table_Users')->with(compact('merc','users'));
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
     * @param  \App\mercadorias  $mercadorias
     * @return \Illuminate\Http\Response
     */
    public function show(mercadorias $mercadorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mercadorias  $mercadorias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = mercadorias::findorfail($id);
        return View("Encomendar.edit")->with(compact('var'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mercadorias  $mercadorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $request->validate([
            'nome' => 'required|max:255',
            'Morada' => 'required|max:255',
            'img' => 'required|max:255',
            'desc' => 'required',
            'NIF' => 'required|max:12',
        ]);

        mercadorias::where(['id'=>$id])->update([
            'nome' => $data['nome'],
            'Morada' => $data['Morada'],
            'img' => $data['img'],
            'desc' => $data['desc'],
            'NIF' => $data['NIF'],
        ]);

        return Redirect('/encomenda')->with('fm_success','Encomenda alterada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mercadorias  $mercadorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mercadorias::where(['id'=>$id])->delete();
        return Redirect('/encomenda')->with('fm_success','Status eliminado com sucesso');
    }
}
