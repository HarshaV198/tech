<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Session;
use App\Models\Organization;

class ClientController extends Controller
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

        return view('admin.superadmin.client', compact('users'));
    }

    public function edit($id){

    	$user = User::where('id',$id)->first();

    	return view('admin.superadmin.clientedit', compact('user'));
    }

    public function update(Request $request, $id){

    	$this->validate($request, [
    		
    		'name' => 'required|string',
    		'organization' => 'required|string',
    		'email' => 'required|email|string',
    	]);

        $orgId = Organization::where('name', $request->organization)->value('id');

        if($orgId) {

        	$user = User::find($id);

        	$user->name = $request->name;
        	$user->organization_id = $orgId;
        	$user->email = $request->email;
            $user->role_id = $request->role;
        	$user->updated_at = date('Y-m-d H:i:s');
        	$user->save();

            if($user){
                Session::flash('success', 'Client Deatils Updated successfully !');
                return redirect(route('client'));
            }
            else{
                Session::flash('error', 'Failed to Updated Client Deatils try again !');
                return back();
            }  
        } else {
            Session::flash('error', 'Organization is Not available');
            return back();
        }  	
    }

    public function destroy($id){

    	$management = User::where('id',$id)->delete();

        if ($management) {
            Session::flash('success', 'client Deleted successfully');
            return back();
        }
    }
}
