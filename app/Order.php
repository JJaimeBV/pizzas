<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['subtotal','shipping','user_id','type_order'];

    //Relacion de pediod por Usuario
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function order_items(){
    	return $this->hasMany('App\OrderItem');
    }
}
