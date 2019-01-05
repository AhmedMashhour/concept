<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    protected $table='programmers';
    protected $fillable=[
        'id',
        'email',
        'name',
        'job',
        'photo',
    ];
}
