<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Session;

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

    public function edit($id) {

        $subcategory = Subcategory::where('id', $id)->first();

        return view('admin.superadmin.subcatedit', compact('subcategory'));
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            
            'name' => 'required|string|unique:subcategories',
        ]);

        $subcategory = Subcategory::find($id);

        $subcategory->name = $request->name;
        $subcategory->updated_at = date('Y-m-d H:i:s');
        $subcategory->save();

        if($subcategory){
            Session::flash('success', 'Subcategory Updated successfully !');
            return redirect(route('subcategory'));
        }
    }

    public function destroy(Request $request) {

        $subcategory = Subcategory::where('id',$request->slug)->first();
        if($subcategory){
            $subcategory->delete();
            return response()->json([
                'data' => 'Deleted succesfully'
            ]);
        }
    }
}