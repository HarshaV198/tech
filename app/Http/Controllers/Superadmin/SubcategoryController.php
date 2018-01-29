<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    
    public function index() {

    	$categories = Category::orderby('created_at','desc')->get();
    	$subcategories = Subcategory::orderby('created_at', 'desc')->get();

    	return view('admin.superadmin.subcategory', compact('categories', 'subcategories'));
    }


    public function store(Request $request) {


    	$subcategory = new Subcategory;

    	$subcategory->name = $request->subcategory;
    	$subcategory->category_id = $request->category;
    	$subcategory->save();

    	if($subcategory) {
    		$request->session()->flash('success', 'Subcategory is created Successfully');
    		return back();
    	}
    }
}
