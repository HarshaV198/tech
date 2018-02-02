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

    public function edit($id) {

        $category = Category::where('id', $id)->first();

        return view('admin.superadmin.catedit', compact('category'));
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            
            'name' => 'required|string|unique:categories',
        ]);

        $category = Category::find($id);

        $category->name = $request->name;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->save();

        if($category){
            Session::flash('success', 'Category Updated successfully !');
            return redirect(route('category'));
        }
    }

    public function destroy(Request $request) {

        $category = Category::where('id',$request->slug)->first();
        if($category){
            $category->delete();
            return response()->json([
                'data' => 'Deleted succesfully'
            ]);
        }
    }
}
