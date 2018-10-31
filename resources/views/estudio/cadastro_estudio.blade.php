@extends('mainKristhian')

@section('content')

<form action="/api/estudio" method="POST">
        <div class="form-group">
            <label for="Est_sigla">Sigla do Estúdio:</label>
            <input type="text" required readonly value="{{ $id }}" name="Est_sigla" id="Est_sigla" required class="form-control" placeholder="Sigla do Estúdio">
        </div>
        <div class="form-group">
            <label for="Est_nome">Nome do Estúdio:</label>
            <input type="text" name="Est_nome" id="Est_nome" required class="form-control" placeholder="Nome do Estúdio">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection