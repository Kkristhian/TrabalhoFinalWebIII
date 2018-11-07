@extends('mainKristhian')

@section('content')

<form action="/api/diretor" method="POST">
        <div class="form-group">
            <label for="id">Código:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" class="form-control" placeholder="Código do Diretor">
        </div>
        <div class="form-group">
            <label for="Est_id">Código do Estúdio:</label>
            <input type="number" required name="Est_id" id="Est_id" class="form-control" placeholder="Código do Estudio">
        </div>
        <div class="form-group">
            <label for="nome_dir">Nome do Diretor:</label>
            <input type="text" required name="nome_dir" id="nome_dir" class="form-control" placeholder="Nome do Diretor">
        </div>s
        <div class="form-group">
            <label for="Idade">Idade:</label>
            <input type="number" required name="idade" id="idade" class="form-control" placeholder="Idade">
        </div>
        <div class="form-group">
        <button type="submit" id="cadastrar" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>


@endsection