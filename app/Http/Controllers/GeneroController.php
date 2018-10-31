<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Genero;

class GeneroController extends BaseController
{
    private $genero = null;

    public function __construct(Genero $genero)
    {
        $this->genero = $genero;
    }

    public function todosGeneros()
    {
        return response()->json($this->genero->todosGeneros(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getGenero($id)
    {
        $genero = $this->genero->getGenero($id);
        if (!$genero) {
            return response()->json(['response', 'Genero não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($genero, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addGenero()
    {
        return response()->json($this->genero->addGenero(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function atualizarGenero($id)
    {
        $genero = $this->genero->atualizarGenero($id);
        if (!$genero) {
            return response()->json(['response', 'Genero não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($genero, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarGenero($id)
    {
        $genero = $this->genero->deletarGenero($id);
        if (!$genero) {
            return response()->json(['response', 'Genero não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Genero deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function max(){
        return $this->genero->max();
    }

    public function loadInicial(){
        return view('mainKristhian');
    }

    public function loadConsultarGenero ()
    {
        return view("genero.consulta_genero", [ "generos" => $this->genero->todosGeneros() ]);
    }

    public function loadCadastrarGeneros(){
        return view('genero.cadastro_genero', [
            'id' => $this->max() + 1
        ]);
    }
    public function loadAtualizarGenero(){
        return view('genero.atualiza_genero', [
            'id' => $this->max() + 1
        ]);
    }

}