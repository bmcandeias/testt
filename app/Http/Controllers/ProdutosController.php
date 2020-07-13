<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produtos.index',[
            'pro' => Produtos::orderBy('id')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("produtos.create");
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
            'preco' => 'required|max:255',
            'imei' => 'required|max:255',
            'desc' => 'required|max:255',
            'img' => 'nullable',
        ]);

        $data = $request->all();
        $var = new Produtos();
        $var->nome = $data['nome'];
        $var->preco = $data['preco'];
        $var->imei = $data['imei'];
        $var->desc = $data['desc'];
        $var->img = $data['img'];
        $var->save();
        return Redirect('/produto')->with('fm_success','Estado adicionado com sucesso!!');
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
        $var = Produtos::findorfail($id);
        return View("produtos/edit")->with(compact('var'));
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
            'nome' => 'required|max:255',
            'preco' => 'required|max:255',
            'imei' => 'required|max:255',
            'desc' => 'required|max:255',
            'img' => 'nullable',
        ]);

        Produtos::where(['id'=>$id])->update([
            'nome' => $data['nome'],
            'preco' => $data['preco'],
            'imei' => $data['imei'],
            'desc' => $data['desc'],
            'img' => $data['img'],
        ]);

        return Redirect('/produto')->with('fm_success','Status alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produtos::where(['id'=>$id])->delete();
        return Redirect('/produto')->with('fm_success','Status eliminado com sucesso');
    }
}
