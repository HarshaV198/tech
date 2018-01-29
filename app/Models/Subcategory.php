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

    	return $this->belongsTo('App\Models\Category');
    }
}
