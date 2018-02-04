<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Category;
use App\Models\Subcategory;

class ListviewController extends Controller
{
    
    public function categorylistview($id){

		$category = Category::where('id', $id)->first();

		$subcategory = Subcategory::where('id', $id)->first();
		
		$organizations = Organization::where('category_id',$id)->orderby('name','asc')->get();

    	return view('listview', compact('category','organizations','subcategory'));
    }


    public function subcategorylistview($id) {

    	$subcategory = Subcategory::where('id', $id)->first();

		$category = Category::where('id', $subcategory->category_id)->first();
		
		$organizations = $subcategory->organizations;

    	return view('listview', compact('category','organizations','subcategory'));
    }
}
