@extends('layouts.AdminLayout')
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
                            <h4 class="card-title">Encomenda</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('encomendar.store')}}" method="post">
                                @csrf
                                @method('post')
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nome</label>
                                            <input type="text" id="nome" name="nome" value="{{old('nome')}}" class="input form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Morada Completa</label>
                                            <input type="text" id="Morada" name="Morada" value="{{old('Morada')}}" class="input form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Link/URL da imagem</label>
                                            <input type="text" id="img" name="img" value="{{old('img')}}" class="input form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Descrição</label>
                                            <textarea type="text" id="desc" name="desc" value="{{old('desc')}}" class="input form-control" required rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">NIF</label>
                                            <input type="text" id="NIF" name="NIF" value="{{old('NIF')}}" class="input form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Encomendar</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
