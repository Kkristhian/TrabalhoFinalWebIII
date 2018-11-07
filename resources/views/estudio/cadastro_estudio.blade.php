@extends('mainKristhian')

@section('content')

<form action="/api/estudio" method="POST">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control">
        <div class="form-group">
            <label for="est_sigla">Sigla do Estúdio:</label>
            <input type="text" name="est_sigla" id="est_sigla" required class="form-control" placeholder="Sigla do Estúdio">
        </div>
        <div class="form-group">
            <label for="est_nome">Nome do Estúdio:</label>
            <input type="text" name="est_nome" id="est_nome" required class="form-control" placeholder="Nome do Estúdio">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection