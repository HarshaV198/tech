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
        'status',
        'organization'
    ];

    public function service(){
		return $this->belongsTo('App\Models\Service');
    }
    
    public function board(){
        return $this->belongsTo('App\Models\DisplayBoard','board_id','id');
    }

}
