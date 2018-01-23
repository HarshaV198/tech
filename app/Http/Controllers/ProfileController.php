<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
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

    	return view('admin.profile.profile');
    }

    public function edit($id) {

    	$user = User::where('id', $id)->first();

    	return view('admin.profile.edit', compact('user'));
    }

    public function update(Request $request, $id) {

    	// return $request->all();


    	$this->validate($request, [
    		
    		'name' => 'required|string',
    		'organization' => 'required|string',
    		'email' => 'required|email|string',
    	]);

    	$user = User::find($id);

    	$user->name = $request->name;
    	$user->organization = $request->organization;
    	$user->email = $request->email;
    	$user->updated_at = date('Y-m-d H:i:s');
    	$user->save();

    	return redirect(route('profile'));
    }
}
