@extends('mainKristhian')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr class='row'>
            <th class="col-2 center">Estúdio Sigla</th>
            <th class="col-2 center">Nome do Estúdio</th>
            <th class="col-2 center">Ações</th>
        </tr>
    </thead>
    <tbody id="tabelaEstudio">
    @foreach($estudios as $estudio)
        <tr class='row'>
            <td class="col-2 center">{{ $estudio->Est_sigla }}</td>
            <td class="col-2 center">{{ $estudio->Est_nome }}</td>
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