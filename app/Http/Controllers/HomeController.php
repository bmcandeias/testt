<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $var = User::findorfail($id);
        return View("Perfil/perfil")->with(compact('var'));
    }

    public function home()
    {
        return view('Index/Index');
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
            'password' => 'sometimes',
            'localizacao' => 'sometimes',

        ]);

        User::where(['id'=>$id])->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'telemovel' => $data['telemovel'],
            'password'=>Hash::make($data['password']),
            'localizacao' => $data['localizacao'],
        ]);

        return Redirect('/perfil')->with('fm_success','Status alterado com sucesso!!');
    }

    public function TB()
    {
        return view('Perfil/tabelas');
    }
}
