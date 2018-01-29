<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    
    public function index() {

    	$categories = Category::all();

    	return view('welcome', compact('categories'));
    }
}
