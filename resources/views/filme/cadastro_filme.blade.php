@extends('mainKristhian')

@section('content')

<form action="/api/filme" method="POST">
        <div class="form-group">
            <label for="ID">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="Id" id="Id" required class="form-control" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="Nome" id="nome" required class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="number" name="Ano" id="Ano" required class="form-control" placeholder="Ano">
        </div>
        <div class="form-group">
            <label for="Fx_etaria">Faixa Etária:</label>
            <input type="text" name="Fx_etaria" id="Fx_etaria" required class="form-control" placeholder="Faixa Etária">
        </div>
        <div class="form-group">
            <label for="gen_codigo">Código do Genero:</label>
            <input type="number" name="Gen_codigo" id="Gen_codigo" required class="form-control" placeholder="Código do genero">
        </div>
        <div class="form-group">
            <label for="dir_codigo">Código do Diretor:</label>
            <input type="number" name="Dir_codigo" id="Dir_codigo" required class="form-control" placeholder="Código do Diretor">
        </div>
        <div class="form-group">
            <label for="est_sigla">Sigla do estúdio:</label>
            <input type="text" name="Est_sigla" id="Est_sigla" required class="form-control" placeholder="Sigla do estudio">
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection