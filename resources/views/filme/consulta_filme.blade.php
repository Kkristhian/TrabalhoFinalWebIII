@extends('mainKristhian')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr class='row'>
            <th class="col-1 center">ID</th>
            <th class="col-1 center">Nome</th>
            <th class="col-1 center">Ano</th>
            <th class="col-1 center">FX Etária</th>
            <th class="col-2 center">Código do Genero</th>
            <th class="col-2 center">Código do Diretor</th>
            <th class="col-2 center">Sigla do Estúdio</th>
            <th class="col-2 center">Ações</th>
        </tr>
    </thead>
    <tbody id="tabelaFilme">
    @foreach($filmes as $filme)
        <tr class='row'>
            <td class="col-1 center">{{ $filme->Id }}</td>
            <td class="col-1 center">{{ $filme->Nome }}</td>
            <td class="col-1 center">{{ $filme->Ano }}</td>
            <td class="col-1 center">{{ $filme->Fx_etaria }}</td>
            <td class="col-2 center">{{ $filme->Gen_codigo }}</td>
            <td class="col-2 center">{{ $filme->Dir_codigo }}</td>
            <td class="col-2 center">{{ $filme->Est_sigla }}</td>
            <td class="col-2 center">
                <a href="">
                    <i  class="btn btn-primary"><span class="glyphicon glyphicon-refresh">Update</span></i>
                </a>
                <a href="">
                    <i class="btn btn-danger"><span class="glyphicon glyphicon-remove">Delete</span></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection