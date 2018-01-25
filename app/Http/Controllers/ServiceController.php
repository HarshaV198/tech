<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index(Request $request){
        $services = Service::orderby('created_at','desc')->get();
        if($request->user()->role_id != 1 ){
            $services = $services->where('organization','=',$request->user()->organization);
        }
        return view('admin.organization.frontdesk',compact('services'));
    }

    public function store(Request $request){
        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'token_prefix' => $request->token_prefix,
            'organization' => $request->user()->organization
        ]);
        $request->session()->flash('success','Service created successfully !');
        return back();
    }
}
