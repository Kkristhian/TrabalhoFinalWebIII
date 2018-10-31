<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    protected $table = 'diretor';
    protected $fillable = array("dir_codigo","est_sigla","nome_dir","idade");
    protected $primaryKey = "dir_codigo";
    public $timestamps = false;

    public function todosDiretores()
    {
        return self::all();
    }

    public function getDiretor($id)
    {
        $diretor= self::find($id);
        if (is_null($diretor)) {
            return false;
        }
        return $diretor;
    }

    public function addDiretor()
    {
        $input = Input::all();
        $diretor = new Diretor($input);
        $diretor->save();
        return $diretor;
    }

    public function atualizarDiretor($id)
    {
        $diretor = self::find($id);
        if (is_null($diretor)) {
            return false;
        }
        $input = Input::all();
        $diretor->fill($input);
        $diretor->save();
        return $diretor;
    }

    public function deletarDiretor($id)
    {
        $diretor = self::find($id);
        if (is_null($diretor)) {
            return false;
        }
        return $diretor->delete(); 
    }

    public function max(){
        return \DB::table('diretor')->max('id');
    }
}
