<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**#@+
* @autor Edgar B.C
* @Class Client tiene realacion con la tabla clients de la base de datos library.
*/

class Client extends Model
{
  protected $fillable = ['code', 'fullname', 'birthdate', 'is_active'];
  /**
  * esta funcion sirve para hacer referencia a la tabla hijo que seria
  * @function order
  */
  public function order(){
    return $this->hasMany('App\order');
  }
}
/**#@-*/
