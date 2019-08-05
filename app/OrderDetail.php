<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $fillable = ['book_id', 'order_id', 'quantity'];

  public function book(){
    return $this->belongsTo('App\Book');
  }
  public function order(){
    return $this->belongsTo('App\Order');
  }
}
