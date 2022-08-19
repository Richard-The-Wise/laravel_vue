<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoClientes extends Model
{
    use HasFactory;

    protected $table = 'clientes_grupos';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = ['id','estatus','nombre'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    //Relaciones
    public function clientes(){
        return $this->hasMany(Cliente::class,'grupo_cliente_id');
    }
}
