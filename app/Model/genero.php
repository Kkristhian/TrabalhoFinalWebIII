<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genero';
    protected $fillable = array("gen_codigo","descricao");
    protected $primaryKey = "gen_codigo";
    public $timestamps = false;

    public function todosGeneros()
    {
        return self::all();
    }

    public function getGenero($id)
    {
        $genero= self::find($id);
        if (is_null($genero)) {
            return false;
        }
        return $genero;
    }

    public function addGenero()
    {
        $input = Input::all();
        $genero = new Genero($input);
        $genero->save();
        return $genero;
    }

    public function atualizarGenero($id)
    {
        $genero = self::find($id);
        if (is_null($genero)) {
            return false;
        }
        $input = Input::all();
        $genero->fill($input);
        $genero->save();
        return $genero;
    }

    public function deletarGenero($id)
    {
        $genero = self::find($id);
        if (is_null($genero)) {
            return false;
        }
        return $genero->delete(); 
    }

    public function max(){
        return \DB::table('genero')->max('gen_codigo');
    }
}
