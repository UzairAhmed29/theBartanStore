<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 

    protected $primarykey='id';

  	public function product()
    {
    	return $this->belongsTo(Product::class, 'product_id');
    }
}
