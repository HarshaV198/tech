<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';

    // protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function categories() {

    	return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function organizations(){
        return $this->belongsToMany('App\Models\Organization','organization_subcategory','subcategory_id','organization_id');
    }

}
