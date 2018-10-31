@extends('mainKristhian')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr class='row'>
            <th class="col-2 center">Código Genero</th>
            <th class="col-2 center">Descrição</th>
            <th class="col-2 center">Ações</th>
        </tr>
    </thead>
    <tbody id="tabelaGenero">
    @foreach($generos as $genero)
        <tr class='row'>
            <td class="col-2 center">{{ $genero->Gen_codigo }}</td>
            <td class="col-2 center">{{ $genero->Descricao }}</td>
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