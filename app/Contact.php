<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 

    protected $primarykey='id';
}
