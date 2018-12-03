<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['titulo','descricao','corpo'];
    protected $guarded = ['id', 'created_at', 'update_at','usuario'];
    protected $table = 'comentario';
}
