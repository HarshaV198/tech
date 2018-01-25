<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrontDesk extends Model
{
    //
    protected $table = 'front_desk';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'ip',
        'service_id',
        'board_id',
        'status'
    ];
}
