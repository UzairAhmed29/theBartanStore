<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model
{
    protected $table = 'product_attributes';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 
    
    protected $primarykey='id';

    protected $casts   = [
        'values'   => 'array',
	];

	public function product()
    {
    	return $this->belongsTo(Product::class, 'product_id');
    }
}
