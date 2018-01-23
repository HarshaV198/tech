<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function changePassword(Request $request){
        $user = $request->user();
        return $user;
        if($user){
            if(isset($request->old_pwd)){
                if(Hash::check($request->old_pwd , $user->password)) {
                    if(isset($request->new_pwd) && $request->filled('new_pwd')){
                        if ($request->new_pwd === $request->confirm_pwd) {
                                $user->password = bcrypt($request->new_pwd);
                                $user =  $user->save();
                                if($user){
                                    Session::flash('success', 'Password changed successfully !');
                                    return back();
                                }
                                else{
                                    Session::flash('error', 'Failed to change password try again !');
                                    return back();
                                }
                            }
                            else{
                            Session::flash('error', 'Passwords are not matching!');
                            return back();
                            }
                        }
                        else{
                            $request->session()->flash('error','Password parameter missing !');
                            return back();
                        }
                    }
                    else{
                        $request->session()->flash('error','Incorrect current password !');
                        return back();
                    }
                }
                else{
                    $request->session()->flash('error','Current password parameter missing !');
                    return back();
                }
        }
        else{
            $request->session()->flash('error','User not found !');
            return back();
        }
    }
}
