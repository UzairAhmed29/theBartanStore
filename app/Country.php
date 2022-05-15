<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primarykey='id';

    protected $table = 'countries';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 
}
