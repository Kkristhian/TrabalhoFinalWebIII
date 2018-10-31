<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Diretor;

class DiretorController extends BaseController
{
    private $diretor = null;

    public function __construct(Diretor $diretor)
    {
        $this->diretor = $diretor;
    }

    public function todosDiretores()
    {
        return response()->json($this->diretor->todosDiretores(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getDiretor($id)
    {
        $diretor = $this->diretor->getDiretor($id);
        if (!$diretor) {
            return response()->json(['response', 'Diretor não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($diretor, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addDiretor()
    {
        return response()->json($this->diretor->addDiretor(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function atualizarDiretor($id)
    {
        $diretor = $this->diretor->atualizarDiretor($id);
        if (!$diretor) {
            return response()->json(['response', 'Diretor não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($diretor, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarDiretor($id)
    {
        $diretor = $this->diretor->deletarDiretor($id);
        if (!$diretor) {
            return response()->json(['response', 'Diretor não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Diretor deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function max(){
        return $this->diretor->max();
    }

    public function loadInicial(){
        return view('mainKristhian');
    }

    public function loadConsultarDiretor ()
    {
        return view("diretor.consulta_diretor", [ "diretores" => $this->diretor->todosDiretores() ]);
    }

    public function loadCadastrarDiretor(){
        return view('diretor.cadastro_diretor', [
            'id' => $this->max() + 1
        ]);
    }
    public function loadAtualizarDiretor(){
        return view('diretor.atualiza_diretor', [
            'id' => $this->max() + 1
        ]);
    }

}