<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @autor Edgar B.C
 * @Class OrderDetail tiene realacion con la tabla order_details de la base de datos library.
 */
class OrderDetail extends Model
{
  protected $fillable = ['book_id', 'order_id', 'quantity'];

  /**
  * esta funcion sirve para hacer referencia a la tabla padre que seria la de Book.
  */
  public function book()
  {
    return $this->belongsTo('App\Book');
  }
  /**
  * esta funcion sirve para hacer referencia a la tabla padre que seria la de Order.
  */
  public function order()
  {
    return $this->belongsTo('App\Order');
  }
}
