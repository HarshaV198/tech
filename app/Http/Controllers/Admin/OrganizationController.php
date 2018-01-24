<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;

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

    	$org = Auth::user()->organization;

    	$staffs = User::where('organization',$org)->get();

    	return view('admin.organization.organization', compact('staffs'));
    }

    public function edit($id){

    	$staff = User::where('id',$id)->first();

    	return view('admin.organization.staffedit', compact('staff'));
    }

    public function update(Request $request, $id){

    	$this->validate($request, [
    		
    		'name' => 'required|string',
    		'organization' => 'required|string',
    		'email' => 'required|email|string',
    	]);

    	$user = User::find($id);

    	$user->name = $request->name;
    	$user->organization = $request->organization;
    	$user->email = $request->email;
        $user->role_id = $request->role;
    	$user->updated_at = date('Y-m-d H:i:s');
    	$user->save();

    	return redirect(route('organization'));
    }

    public function destroy($id) {

    	User::where('id',$id)->delete();

    	return redirect()->back();
    }
}
