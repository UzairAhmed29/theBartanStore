<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    Protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $primarykey='id';

     protected $casts   = [
		'product_ids'   => 'array'
	];

	public function coupon() {
	    return $this->belongsTo(Coupon::class, 'IsCouponApplied');
    }

    public function user()
    {
	    return $this->belongsTo(User::class, 'user_id');

    }
}
