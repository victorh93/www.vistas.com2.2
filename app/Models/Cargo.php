<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    public function persona(){
        return $this->belongsTo(persona::class,'id_persona','id');
    }

    public function departamento(){
        return $this->belongsTo(departamento::class,'id_departamento','id');
    }
}
