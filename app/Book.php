<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @autor Edgar B.C
 * @Class Book tiene realacion con la tabla books de la base de datos library.
 */
class Book extends Model
{
  protected $fillable = ['name', 'autor', 'page', 'total_copies', 'available_copies'];

  /**
  * esta funcion sirve para hacer referencia a la tabla hijo que seria la tabla OrderDetail
  * @function orderDetail
  */
  public function orderDetail()
  {
    return $this->hasMany('App\orderDetail');
  }
}
