<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'eventos';
    protected $guarded = ['id'];
    protected $fillable = ['titulo', 'descricao', 'cidade','privado', 'image'];
    
    public function user(){
        return  $this->belongsTo('App\Models\User');
    }
}
