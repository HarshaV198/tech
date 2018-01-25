<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\FrontDesk;
use App\Models\DisplayBoard;

class ServiceController extends Controller
{
    public function index(Request $request){
        $services = Service::orderby('created_at','desc')->get();
        $frontdesks = FrontDesk::orderby('created_at','desc')->get();
        $boards = DisplayBoard::orderby('created_at','desc')->get();
        if($request->user()->role_id != 1 ){
            $services = $services->where('organization','=',$request->user()->organization);
            $frontdesks = $frontdesks->where('organization','=',$request->user()->organization);
            $boards = $boards->where('organization','=',$request->user()->organization);
        }   
        return view('admin.organization.frontdesk',compact('services','frontdesks','boards'));
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

    public function editView(Request $request){
        $service = Service::where('id',$request->slug)->first();
        return response()->json([
            'data' => $service
        ]);
    }

    public function update(Request $request){
        $service = Service::where('id',$request->slug)->first();
        if($service){
            $service->name = $request->name;
            $service->description = $request->description;
            $service->token_prefix = $request->token_prefix;
            $service = $service->save();
            if($service){
                $request->session()->flash('success','Service updated successfully !');
                return back();
            }
        }
    }

    public function delete(Request $request){
        $service = Service::where('id',$request->slug)->first();
        if($service){
            $service->delete();
            return response()->json([
                'data' => 'Deleted succesfully'
            ]);
        }
    }

}
