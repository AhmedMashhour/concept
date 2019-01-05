<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{




    protected $table='products';
    protected $fillable=[
        'id',
        'title',
        'photo',
        'content',
        'weight',
        'stock',
        'price',
        'price_offer',
        'status',
        'reason',
        'end_at',
        'start_at',
        'end_offer_at',
        'start_offer_at',
        'other_data',
        'department_id',
        'currency_id',
        'trademark_id',
        'manufact_id',
        'color_id',
        'size_id',
        'weight_id',

    ];
public function files()
{
    return $this->hasMany('App\Files','relation_id','id')->where('file_type','product');
}
}
