<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @yield('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">

    <title>TRABALHO Final WEB III</title>
    
    </head>
    <body>
        <div style="background-color: #F5F5F5; ">
            <div class ="container">
                <div class ="navbar-header">
                    <a href = "/inicial/" class ="navbar-brand">TRABALHO FINAL WEB III</a>
                </div>
                
                <div>
                    <ul class="nav nav-tabs">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">FILME</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/inicial/ConsultaFilme">Consulta Filmes</a>
                                <a class="nav-link disabled" href="/inicial/CadastrarFilme">Cadastrar Filme</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DIRETOR</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/inicial/ConsultaDiretor">Consulta Diretor</a>
                                <a class="nav-link disabled" href="/inicial/CadastrarDiretor">Cadastrar Diretor</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ESTUDIO</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/inicial/ConsultaEstudio">Consulta Estudio</a>
                                <a class="nav-link disabled" href="/inicial/CadastrarEstudio">Cadastrar Estudio</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">GENERO</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/inicial/ConsultaGenero">Consulta Genero</a>
                                <a class="nav-link disabled" href="/inicial/CadastrarGenero">Cadastrar Genero</a>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>

        <div class="container">
            @yield('content')
        </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield('js')
  </body>
  
</html>