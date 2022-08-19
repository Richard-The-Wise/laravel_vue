<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipios';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['id','estado_id','nombre','pais_id'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    //Relaciones
    public function estados(){
        return $this->belongsTo(Estado::class,'estado_id','id');
    }

    public function paises(){
        return $this->belongsTo(Pais::class,'pais_id','id');
    }

    public function clientes(){
        $this->hasMany(Cliente::class);
    }

    public function cliente_direcciones(){
        $this->hasMany(ClienteDirecciones::class,'municipio_id');
    }
}
