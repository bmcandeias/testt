<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cli = Cliente::select()->get();
        $users = User::select()->get();
        return view('Assets.table_Users')->with(compact('cli','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $var = User::findorfail($id);
        return View("cliente/edit")->with(compact('var'));
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
        $data = $request->all();
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'telemovel' => 'sometimes',
            'localizacao' => 'sometimes',
            'nivel' => 'required',
        ]);

        User::where(['id'=>$id])->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'telemovel' => $data['telemovel'],
            'localizacao' => $data['localizacao'],
            'nivel' => $data['nivel'],
        ]);

        return Redirect('/cliente')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where(['id'=>$id])->delete();
        return Redirect('/cliente')->with('fm_success','Status eliminado com sucesso');
    }
}
