<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVaritions extends Model
{
    protected $table = 'product_variations';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 
    
    protected $primarykey='id';

	public function product()
    {
    	return $this->belongsTo(Product::class, 'product_id');
    }
}
