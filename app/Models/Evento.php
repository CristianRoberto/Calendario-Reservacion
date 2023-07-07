<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    //representamos datos ntabla- tenemos el modelo
    static $rules=[
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required'
    ];
    //nos permite utilizar los campos del formulario
    protected $fillable = ['title','descripcion','start','end'];
}



