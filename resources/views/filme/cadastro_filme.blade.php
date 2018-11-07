@extends('mainKristhian')

@section('content')

<form action="/api/filme" method="POST">
        <div class="form-group">
            <label for="ID">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="Id" id="Id" required class="form-control" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="date" name="ano" id="ano" required class="form-control" placeholder="Ano">
        </div>
        <div class="form-group">
            <label for="fx_etaria">Faixa Etária:</label>
            <input type="text" name="fx_etaria" id="fx_etaria" required class="form-control" placeholder="Faixa Etária">
        </div>
        <div class="form-group">
            <label for="gen_codigo">Código do Genero:</label>
            <input type="number" name="gen_codigo" id="gen_codigo" required class="form-control" placeholder="Código do genero">
        </div>
        <div class="form-group">
            <label for="dir_codigo">Código do Diretor:</label>
            <input type="number" name="dir_codigo" id="dir_codigo" required class="form-control" placeholder="Código do Diretor">
        </div>
        <div class="form-group">
            <label for="est_id">Código do estúdio:</label>
            <input type="number" name="est_id" id="est_id" required class="form-control" placeholder="Código do estudio">
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection