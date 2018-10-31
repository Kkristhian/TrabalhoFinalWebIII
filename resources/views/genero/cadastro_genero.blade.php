@extends('mainKristhian')

@section('content')

<form action="/api/genero" method="POST">
        <div class="form-group">
            <label for="Gen_codigo">Código do Genero:</label>
            <input type="number" required readonly value="{{ $id }}" name="Gen_codigo" id="Gen_codigo" required class="form-control" placeholder="Código do Genero">
        </div>
        <div class="form-group">
            <label for="Descricao">Descrição:</label>
            <input type="text" name="Descricao" id="descricao" required class="form-control" placeholder="Descricao">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection