<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    protected $table = 'contact_uses';
    
    Protected $guarded = ['id', 'created_at', 'updated_at']; 

    protected $primarykey='id';
}
