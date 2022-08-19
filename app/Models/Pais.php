<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'paises';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['id','nombre'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    //Relaciones
       public function estados(){
        return $this->hasMany(Estado::class, 'pais_id', 'id');
    }

    public function municipios(){
        return $this->hasMany(Municipio::class, 'pais_id','id');
    }

    public function clientes(){
        $this->hasMany(Cliente::class,'pais_id');
    }

    public function cliente_direcciones(){
        $this->hasMany(ClienteDirecciones::class,'pais_id');
    }
}
