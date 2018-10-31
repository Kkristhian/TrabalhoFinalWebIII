@extends('mainKristhian')

@section('content')

<form action="/api/diretor" method="POST">
        <div class="form-group">
            <label for="Dir_codigo">Código:</label>
            <input type="number" required readonly value="{{ $id }}" name="Dir_codigo" id="Dir_codigo" class="form-control" placeholder="Código do Diretor">
        </div>
        <div class="form-group">
            <label for="Est_sigla">Sigla do Estúdio:</label>
            <input type="text" required name="Est_sigla" id="Est_sigla" class="form-control" placeholder="Sigla do Estúdio">
        </div>
        <div class="form-group">
            <label for="Nome_dir">Nome do Diretor:</label>
            <input type="text" required name="Nome_dir" id="Nome_dir" class="form-control" placeholder="Nome do Diretor">
        </div>
        <div class="form-group">
            <label for="Idade">Idade:</label>
            <input type="number" required name="idade" id="idade" class="form-control" placeholder="Idade">
        </div>
        <div class="form-group">
        <button type="submit" id="cadastrar" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>


@endsection