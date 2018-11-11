@extends('mainKristhian')

@section('content')

<form action="/api/genero" method="PUT">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control" placeholder="Id">
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao"  id="descricao" required class="form-control" placeholder="descricao">
        </div>
       
        <div class="form-group">
        <button type="submit" id="atualiza" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection