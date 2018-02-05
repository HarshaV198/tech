<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Session;

class ManagementController extends Controller
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

    public function index() {

        $users = User::all();

        return view('admin.superadmin.management', compact('users'));
    }

    public function edit($id){

    	$user = User::where('id',$id)->first();

    	return view('admin.superadmin.edit', compact('user'));
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
            Session::flash('success', 'User Deatils Updated successfully !');
            return redirect(route('management'));
        }
        else{
            Session::flash('error', 'Failed to Updated User Deatils try again !');
            return back();
        }    	
    }

    public function destroy($id){

    	$management = User::where('id',$id)->delete();

        if ($management) {
            Session::flash('success', 'Management User Deleted successfully');
            return back();
        }
    }
}
