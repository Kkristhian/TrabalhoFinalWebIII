<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filme';
    protected $fillable = array("id","nome","ano","fx_etaria","gen_codigo","dir_codigo","est_sigla");
    protected $primaryKey = "id";
    public $timestamps = false;

    public function todosFilmes()
    {
        return self::all();
    }

    public function getFilme($id)
    {
        $filme= self::find($id);
        if (is_null($filme)) {
            return false;
        }
        return $filme;
    }

    public function addFime()
    {
        $input = Input::all();
        $filme = new Filme($input);
        $filme->save();
        return $filme;
    }

    public function atualizarFilme($id)
    {
        $filme = self::find($id);
        if (is_null($filme)) {
            return false;
        }
        $input = Input::all();
        $filme->fill($input);
        $filme->save();
        return $filme;
    }

    public function deletarFilme($id)
    {
        $filme = self::find($id);
        if (is_null($filme)) {
            return false;
        }
        return $filme->delete(); 
    }

    public function max(){
        return \DB::table('filme')->max('id');
    }
}
