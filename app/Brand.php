<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    
    protected $guarded = ['id', 'created_at', 'updated_at']; 

    protected $primarykey='id';
}
