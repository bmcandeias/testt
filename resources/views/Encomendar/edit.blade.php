@extends(('layouts.AdminLayout'))
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <br>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" action="/encomenda/{{$var->id}}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nome</label>
                                            <input name="nome" id="nome" value="{{$var->nome}}" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Morada</label>
                                            <input name="Morada" id="Morada" value="{{$var->Morada}}"  type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">NIF</label>
                                            <input name="NIF" id="NIF" value="{{$var->NIF}}"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Url/Imagem</label>
                                            <input name="img" id="img" value="{{$var->img}}"  type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Descrição</label>
                                            <input name="desc" id="desc" value="{{$var->desc}}"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
