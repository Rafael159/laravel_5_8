<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{   
    /**
     * Fillable is the opposite of Guarded. Which means that in $fillable
     * we declare what is expected to be filled. The other way around, 
     * in $guarded, we declared which fields cannot be accepted
     */

    // Fillable Example
    //protected $fillable = ['name', 'email', 'active'];

    //Guarded Example
    protected $guarded = [];

    public function scopeActive($query){
        return $query->where('active', 1);
    }

    public function scopeInactive($query){
        return $query->where('active', 0);
    }
}
