<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Filme;

class FilmeController extends BaseController
{
    private $filme = null;

    public function __construct(Filme $filme)
    {
        $this->filme = $filme;
    }

    public function todosFilmes()
    {
        return response()->json($this->filme->todosFilmes(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getFilme($id)
    {
        $filme = $this->filme->getfilme($id);
        if (!$filme) {
            return response()->json(['response', 'Filme não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($filme, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addFilme()
    {
        return response()->json($this->filme->addFilme(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function atualizarFilme($id)
    {
        $genero = $this->filme->atualizarFilme($id);
        if (!$filme) {
            return response()->json(['response', 'Filme não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($filme, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarFilme($id)
    {
        $filme = $this->filme->deletarFilme($id);
        if (!$filme) {
            return response()->json(['response', 'Filme não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Filme deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function max(){
        return $this->filme->max();
    }

    public function loadInicial(){
        return view('mainKristhian');
    }

    public function loadConsultarFilme ()
    {
        return view("filme.consulta_filme", [ "filmes" => $this->filme->todosFilmes() ]);
    }

    public function loadCadastrarFilme(){
        return view('filme.cadastro_filme', [
            'id' => $this->max() + 1
        ]);
    }
    public function loadAtualizarFilme(){
        return view('filme.atualiza_filme', [
            'id' => $this->max() + 1
        ]);
    }

}