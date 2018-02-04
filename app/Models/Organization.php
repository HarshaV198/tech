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
        'postal_code',
        'category_id'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function subcategories(){
        return $this->belongsToMany('App\Models\Subcategory','organization_subcategory','organization_id','subcategory_id');
    }
}
