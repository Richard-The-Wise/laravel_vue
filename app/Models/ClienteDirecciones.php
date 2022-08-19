<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteDirecciones extends Model
{
    use HasFactory;

    protected $table = 'cliente_direcciones';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['id','cliente_id','pais_id','estado_id','municipio_id','estatus','tipo','nombre','calle','numero_exterior','numero_interior','colonia','codigo_postal'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    //Relaciones
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    public function paises(){
        return $this->belongsTo(Pais::class,'pais_id');
    }

    public function estados(){
        return $this->belongsTo(Estado::class,'estado_id');
    }

    public function municipios(){
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }
}
