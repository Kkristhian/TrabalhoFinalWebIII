<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    protected $table = 'estudio';
    protected $fillable = array("est_sigla","est_nome");
    protected $primaryKey = "est_sigla";
    public $timestamps = false;

    public function todosEstudios()
    {
        return self::all();
    }

    public function getEstudio($id)
    {
        $estudio= self::find($id);
        if (is_null($estudio)) {
            return false;
        }
        return $estudio;
    }

    public function addEstudio()
    {
        $input = Input::all();
        $estudio = new Estudio($input);
        $estudio->save();
        return $estudio;
    }

    public function atualizarEstudio($id)
    {
        $estudio = self::find($id);
        if (is_null($estudio)) {
            return false;
        }
        $input = Input::all();
        $estudio->fill($input);
        $estudio->save();
        return $estudio;
    }

    public function deletarEstudio($id)
    {
        $estudio = self::find($id);
        if (is_null($estudio)) {
            return false;
        }
        return $estudio->delete(); 
    }

    public function max(){
        return \DB::table('estudio')->max('id');
    }
}
