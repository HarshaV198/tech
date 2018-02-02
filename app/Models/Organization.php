<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';

    protected $fillable = [
        'name',
        'address1',
        'address2',
        'street',
        'city',
        'state',
        'postal_code'
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

}
