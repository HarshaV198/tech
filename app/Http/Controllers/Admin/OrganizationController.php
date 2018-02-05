<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;
use Session;

class OrganizationController extends Controller
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

    	$org = Auth::user()->organization->id;

    	$staffs = User::where('organization_id',$org)->get();

    	return view('admin.organization.organization', compact('staffs'));
    }


    public function create(){

        return view('admin.organization.staffcreat');
    }


    public function store(Request $request){

        $this->validate($request, [
            
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'organization' => Auth::user()->organization,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($user){
            $request->session()->flash('success','Staff created successfully !');
            return redirect(route('organization'));
        }
        else{
            $request->session()->flash('error','Failed create Staff try again !');
            return back();
        }
    }



    public function edit($id){

    	$staff = User::where('id',$id)->first();

    	return view('admin.organization.staffedit', compact('staff'));
    }

    public function update(Request $request, $id){

    	$this->validate($request, [
    		
    		'name' => 'required|string',
    		'email' => 'required|email|string',
    	]);

    	$user = User::find($id);

    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->role_id = $request->role;
    	$user->updated_at = date('Y-m-d H:i:s');
    	$user->save();

        if($user){
            Session::flash('success', 'Staff Deatils Updated successfully !');
            return redirect(route('organization'));
        }
        else{
            Session::flash('error', 'Failed to Updated Staff Deatils try again !');
            return back();
        }
    }

    public function destroy($id) {

    	$organization = User::where('id',$id)->delete();

        if ($organization) {
            Session::flash('success', 'User Deleted successfully');
            return back();   
        }
    }
}
