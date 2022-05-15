<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 

    protected $primarykey='id';

    public function orders() {
    	return $this->hasMany(Order::class);
  	}
}
