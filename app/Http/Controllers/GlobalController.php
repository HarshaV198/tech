<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class GlobalController extends Controller
{
    public function index(){
        $categories = Category::orderby('name','asc')->get();
        $subcategories = Subcategory::orderby('name','asc')->get();
        return view('admin.organization.globalsettings',compact('categories','subcategories'));
    }

    public function store(Request $request){
        
        return $request->all();
    }
}
