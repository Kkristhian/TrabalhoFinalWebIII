@extends('mainKristhian')

@section('content')

<form action="/api/estudio" method="PUT">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="est_sigla">Sigla do estudio:</label>
            <input type="text" name="est_sigla" id="est_sigla"required class="form-control" placeholder="sigla">
        </div>
        <div class="form-group">
            <label for="est_nome">Nome do Estudio</label>
            <input type="text" name="est_nome" id="est_nome" required class="form-control" placeholder="Nome">
        </div>
       
        <div class="form-group">
        <button type="submit" id="atualiza" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection