<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = 'services';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'token_prefix',
        'organization'
    ];

    protected $hidden = [
        'organization'
     ];
}
