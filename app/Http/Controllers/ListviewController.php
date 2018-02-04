<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Category;
use App\Models\Subcategory;

class ListviewController extends Controller
{
    
    public function categorylistview($id){

    	// $categorylist = Organization::where('category_id', $id)->first();

    	$category = Category::where('id', $id)->first();

    	return view('listview', compact('categorylist', 'category'));
    }


    public function subcategorylistview($id) {

    	$subcategory = Subcategory::where('id', $id)->first();

    	$category = Category::where('id', $subcategory->category_id)->first();

    	return view('listview', compact('category', 'subcategory'));
    }
}
