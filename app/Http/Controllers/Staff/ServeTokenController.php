<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServeTokenController extends Controller
{
    
    public function index(){

    	return view('admin.staff.servetoken');
    }
}
