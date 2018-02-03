<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class GlobalController extends Controller
{
    public function index(Request $request){
        $user = $request->user();
        if($user->role_id == 2){
            $organization = $user->organization;
            $categories = Category::orderby('name','asc')->get();
            $subcategories = Subcategory::orderby('name','asc')->get();
            return view('admin.organization.globalsettings',compact('organization','categories','subcategories'));
        }
        return back();
    }

    public function store(Request $request){
        return $request->all();
    }
}
