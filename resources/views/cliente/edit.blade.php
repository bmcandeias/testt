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
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Adicionar Cliente</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="/cliente/{{$var->id}}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Username</label>
                                            <input name="name" id="name" value="{{$var->name}}" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input name="email" id="email" value="{{$var->email}}"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Localização</label>
                                            <input name="localizacao" id="localizacao" value="{{$var->localizacao}}"  type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nivel</label>
                                            <input name="nivel" id="nivel" value="{{$var->nivel}}"  type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Telemovel</label>
                                            <input name="telemovel" id="telemovel" value="{{$var->telemovel}}"  type="text" class="form-control">
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
