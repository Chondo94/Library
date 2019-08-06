<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

  protected $fillable = ['client_id', 'order_number', 'loan_date', 'delivery_date', 'state_order'];

  public function client(){ //esta funcion sirve para hacer referencia a la tabla padre que seria la de client
    return $this->belongsTo('App\Client');//ya que en este caso la tabla clien es padre de order.
  }
  public function orderDetail(){ //esta funcion sirve para hacer referencia a la tabla hijo que seria hijo de la
    return $this->hasMany('App\OrderDetail');// tabla Order.
  }
}
