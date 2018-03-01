<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Category;
use App\Models\Subcategory;

class ListviewController extends Controller
{
    
    public function categorylistview($id){

    	// $ip = \Request::ip();

    	$ip = '122.172.98.132';
    	$data = \Location::get($ip);

		$category = Category::where('id', $id)->first();

		$subcategory = Subcategory::where('id', $id)->first();
		
		$organizations = Organization::where('category_id',$id)->orderby('name','asc')->get();

    	return view('listview', compact('category','organizations','subcategory', 'data'));
    }


    public function subcategorylistview($id) {

    	// $ip = \Request::ip();

    	$ip = '122.172.98.132';
    	$data = \Location::get($ip);


    	$subcategory = Subcategory::where('id', $id)->first();

		$category = Category::where('id', $subcategory->category_id)->first();
		
		$organizations = $subcategory->organizations;

    	return view('listview', compact('category','organizations','subcategory', 'data'));
    }

    public function search(Request $request) {

        $ip = '122.172.98.132';
        $data = \Location::get($ip);

        $searchData = $request->searchData;

        if($searchData) {

            $organizations = Organization::where('name', 'like', '%'. $searchData .'%')->get();
            return view('search', compact('organizations', 'data'));
        } 
        return back();        
    }
}
