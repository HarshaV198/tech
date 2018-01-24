<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisplayBoard extends Model
{
    protected $table = 'display_board';

    // protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'status',
        'organization'
    ];

}
