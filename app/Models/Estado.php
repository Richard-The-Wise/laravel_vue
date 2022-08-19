<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['nombre','id','pais_id'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    //Relaciones
    public function paises(){
        return $this->belongsTo(Pais::class,'pais_id','id');
    }

    public function municipios(){
        return $this->hasMany(Municipio::class, 'estado_id','id');
    }

    public function clientes(){
        $this->hasMany(Cliente::class);
    }

    public function cliente_direcciones(){
        $this->hasMany(ClienteDirecciones::class,'estado_id');
    }
}
