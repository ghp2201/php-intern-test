<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    //comando para evitar erro de massa asigment ao enviar o array de infos p/obd
    protected $fillable = [
        'name',
        'description',
        'value'
    ] ;
}
