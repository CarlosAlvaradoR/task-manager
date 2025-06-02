<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'title',       // Permite que 'title' sea asignado masivamente
        'description', // Permite que 'description' sea asignado masivamente
        'status'
    ];

    //  Si vamos a permitir todos los campos excepto algunos, usamos $guarded en lugar de $fillable
    // protected $guarded = ['id']; // Bloquea solo el campo 'id', permite todo lo demás
}
