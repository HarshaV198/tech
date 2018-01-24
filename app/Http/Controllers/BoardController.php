<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisplayBoard;

class BoardController extends Controller
{
    public function index(Request $request){
        $boards = DisplayBoard::orderby('created_at','asc')->get();

        if($request->user()->role_id != 1 ){
            $boards = $boards->where('organization','=',$request->user()->organization);
        }

        return view('admin.organization.displayboard',compact('boards'));
    }

    public function store(Request $request){
        $display_board = DisplayBoard::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'organization' => 'wism'
        ]);
        if($display_board){
            $request->session()->flash('success','Board created successfully !');
            return back();
        }
        else{
            $request->session()->flash('error','Failed create Board try again !');
            return back();
        }
    }

    public function editView(Request $request){
        
    }
}
