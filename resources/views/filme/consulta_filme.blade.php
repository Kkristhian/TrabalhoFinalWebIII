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

    </tbody>
</table>

@endsection