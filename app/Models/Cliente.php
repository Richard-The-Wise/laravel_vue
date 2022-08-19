<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['id','pais_id','estado_id','municipio_id','nombre_comercial','razon_social','email','calle','numero_exterior','numero_interior','colonia','estatus','grupo_cliente_id','codigo_postal'];
    protected $dates = ['created_at','updated_at','deleted_at'];

//Relaciones
    public function paises(){
        return $this->belongsTo(Pais::class,'pais_id');
    }

    public function estados(){
        return $this->belongsTo(Estado::class,'estado_id');
    }

    public function municipios(){
        return $this->belongsTo(Municipio::class,'municipio_id');
    }

    public function grupo_clientes(){
        return $this->belongsTo(GrupoClientes::class,'grupo_cliente_id');
    }

    public function cliente_direcciones(){
        return $this->hasMany(ClienteDirecciones::class,'cliente_id');
    }
}
