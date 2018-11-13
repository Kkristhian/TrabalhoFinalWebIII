<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Estudio;
use Illuminate\Http\Request;

class EstudioController extends BaseController
{
    private $estudio = null;

    public function __construct(Estudio $estudio)
    {
        $this->estudio = $estudio;
    }

    public function todosEstudios()
    {
        return response()->json($this->estudio->todosEstudios(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getEstudio($id)
    {
        $estudio = $this->estudio->getEstudio($id);
        if (!$estudio) {
            return response()->json(['response', 'Estudio não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($estudio, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addEstudio()
    {
        return response()->json($this->estudio->addEstudio(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function atualizarEstudio($id)
    {
        $diretor = $this->estudio->atualizarEstudio($id);
        if (!$estudio) {
            return response()->json(['response', 'Estudio não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($estudio, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarEstudio($id)
    {
        $estudio = $this->estudio->deletarEstudio($id);
        if (!$estudio) {
            return response()->json(['response', 'Estudio não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Estudio deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function max(){
        return $this->estudio->max();
    }

    public function loadInicial(){
        return view('mainKristhian');
    }

    public function loadConsultarEstudio ()
    {
        return view("estudio.consulta_estudio", [ "estudios" => $this->estudio->todosEstudios() ]);
    }

    public function loadCadastrarEstudio(){
        return view('estudio.cadastro_estudio', [
            'id' => $this->max() + 1
        ]);
    }
    public function loadAtualizarEstudio(Request $request, $id){
        $oModel = $this->estudio->getEstudio($id);
        return view('estudio.atualiza_estudio', [
            'id' => $id,
            'model' => $oModel
        ]);
    }

}