<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 
    
    protected $primarykey='id';

    protected $casts   = [
		'gallery'   => 'array'
	];

	public function category() {
	    return $this->belongsTo(Category::class, 'category_id');
    }

    public function galleries() {
        return $this->hasMany(Gallery::class);
    }

    public function productAttributes() {
        return $this->hasMany(ProductAttributes::class);
    }

    public function productVariations() {
        return $this->hasMany(ProductVaritions::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
