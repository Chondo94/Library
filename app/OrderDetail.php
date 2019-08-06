<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $fillable = ['book_id', 'order_id', 'quantity'];

  public function book(){ //esta funcion sirve para hacer referencia a la tabla padre que seria la de Book.
    return $this->belongsTo('App\Book');
  }
  public function order(){ //esta funcion sirve para hacer referencia a la tabla padre que seria la de Order.
    return $this->belongsTo('App\Order');
  }
}
