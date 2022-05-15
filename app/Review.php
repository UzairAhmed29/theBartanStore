<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'product_review';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 
    
    protected $primarykey='id';

    public function product() {
	    return $this->belongsTo(Product::class, 'product_id');
    }

    public function user() {
	    return $this->belongsTo(User::class, 'user_id');
    }
}
