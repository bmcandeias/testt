@extends('layouts/AdminLayout')
@section('content')
<link rel="stylesheet" href="{{asset('assetsTabel/css/bootstrap.css')}}">
<link href="{{asset('assetsTabel/css/fresh-bootstrap-table.css')}}" rel="stylesheet" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

<script src="{{asset('assetsTabel/js/bootstrap.js')}}"></script>
<script src="{{asset('assetsTabel/js/jquery.js')}}"></script>
<script src="{{asset('assetsTabel/js/bootstrap-table.js')}}"></script>
</head>
<body>

<div class="wrapper">
    <div class="container">
            <h1>Encomendas</h1>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Morada</th>
                            <th scope="col">Imagem/Url</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">NIF</th>
                            <th scope="col">Ações</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($merc as $var)
                            <tr>
                                <td>{{$var->id}}</td>
                                <td>{{$var->nome}}</td>
                                <td>{{$var->Morada}}</td>
                                <td>{{$var->img}}</td>
                                <td>{{$var->desc}}</td>
                                <td>{{$var->NIF}}</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="/encomenda/{{$var->id}}/edit">Edit</a>
                                    <form action="/encomenda/{{$var->id}}" style="margin:1px" method="post"> @csrf @method('delete')
                                        <input type="submit" class="btn btn-danger btn-xs" value="Del"> </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
    </div>
</div>
</div>



@endsection
