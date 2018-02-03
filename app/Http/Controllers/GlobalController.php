<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;

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
        $user = $request->user(); 
        if($user->role_id == 2){
            $organization = $user->organization;
            $organization->address1 = $request->address1;
            $organization->address2 = $request->address2;
            $organization->street = $request->street;
            $organization->city = $request->city;
            $organization->state = $request->state;
            $organization->postal_code = $request->postal_code;
            $organization->country = $request->country;
            $organization->telephone = $request->telephone;
            $organization->website = $request->website;
            $organization->service_info = $request->service_info;
            $organization->start_time = $request->start_time;
            $organization->end_time = $request->end_time;
            $organization->full_day = $request->full_day;
            $organization->lunch_break_from = $request->lunch_break_from;
            $organization->lunch_break_to = $request->lunch_break_to;
            $organization->holyday_starttime = $request->holyday_starttime;
            $organization->holyday_endtime = $request->holyday_endtime;
            $organization->default_wait_time = $request->default_wait_time;
            $organization->lat = $request->lat;
            $organization->lang = $request->lng;
            $organization->google_location = $request->google_location;
            $organization->working_days = json_encode($request->working_days);
            if($request->file('profile_pic')){
                $filename = $request->profile_pic->getClientOriginalName();
                $currentDateTime = Carbon::now();
                $filename = $currentDateTime.$filename;
                $filename = str_replace(' ','_',$filename);
                $profile_pic =  $request->profile_pic->storeAs('/public/upload',$filename);
                $organization->profile_pic = $profile_pic;
            }
            if($request->file('premium_banner')){
                $filename = $request->premium_banner->getClientOriginalName();
                $currentDateTime = Carbon::now();
                $filename = $currentDateTime.$filename;
                $filename = str_replace(' ','_',$filename);
                $profile_pic =  $request->premium_banner->storeAs('public/upload',$filename);
                $organization->premium_banner = $profile_pic;
            }
            if($request->file('classic_banner')){
                $filename = $request->classic_banner->getClientOriginalName();
                $currentDateTime = Carbon::now();
                $filename = $currentDateTime.$filename;
                $filename = str_replace(' ','_',$filename);
                $profile_pic =  $request->classic_banner->storeAs('public/upload',$filename);
                $organization->classic_banner = $profile_pic;
            }
            $organization->update();
         }
        return back();
    }
}
