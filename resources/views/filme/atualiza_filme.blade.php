@extends('mainKristhian')

@section('content')

<form action="/api/filme" method="PUT">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" required readonly value="{{ $id }}" name="id" id="id" required class="form-control" placeholder="Id">
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
            <input type="number" name="fx_etaria" id="fx_etaria" required class="form-control" placeholder="Faixa Etária">
        </div>
        <div class="form-group">
            <label for="est_id">Estudio:</label>
            <input type="number" name="est_id" id="est_id" required class="form-control" placeholder="Código do Estudio">

            <select id="est_id" name="est_id" class="form-control">
                @foreach ($estudios as $estudio)
                    <option value="{{ $estudio->id }}">{{ $estudio->nome_estudio }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="dir_codigo">Código do Diretor:</label>
            <input type="number" name="dir_codigo" id="dir_codigo" required class="form-control" placeholder="Código do Diretor">
       
            <select id="dir_codigo" name="dir_codigo" class="form-control">
                @foreach ($estudios as $estudio)
                    <option value="{{ $estudio->id }}">{{ $estudio->tipo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="gen_codigo">Genero:</label>
            <input type="number" name="gen_codigo" id="gen_codigo" required class="form-control" placeholder="Código do Gênero">
       
            <select id="gen_codigo" name="gen_codigo" class="form-control">
                @foreach ($generos as $genero)
                    <option value="{{ $genero->id }}">{{ $genero->descricao }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
        <button type="submit" id="atualizarFilme" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

@endsection