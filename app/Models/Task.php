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
}
