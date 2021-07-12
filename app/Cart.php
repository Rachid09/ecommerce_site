<?php

namespace App;

use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    //
    use HasFactory;

    protected $table="carts";

   /* protected $fillable = [
     'session_id','user_id', 'product_id', 'size', 'quantity',
    ];
*/

  /*   public function deleteCartItem(Request $r)
    {
        
        
        $counter=0;
        $newtotalCart = explode(',',Session::get('cart'));
        
        foreach($newtotalCart as $c)
        {
            $newcart[]=explode(':',$c);
        } */
      


}
