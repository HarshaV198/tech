<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IssueTokenController extends Controller
{
    
    public function index(){

    	return view('admin.staff.issuetoken');
    }
}
