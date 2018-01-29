<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	$categories = Category::all();

    	return view('admin.superadmin.category', compact('categories'));
    }

    public function store(Request $request){

    	$this->validate($request, [
    		'name' => 'unique:categories',
    	]);

    	$category = new Category;

    	$category->name = $request->name;
    	$category->save();

    	if($category){
            Session::flash('success', 'Category is created successfully !');
            return back();
        }
        else{
            Session::flash('error', 'Failed to create Category try again !');
            return back();
        }
    }
}
