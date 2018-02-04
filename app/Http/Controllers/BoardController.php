<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisplayBoard;

class BoardController extends Controller
{
    public function index(Request $request){
        $boards = DisplayBoard::orderby('created_at','desc')->get();

        if($request->user()->role_id != 1 ){
            $boards = $boards->where('organization','=',$request->user()->organization_id);
        }

        return view('admin.organization.displayboard',compact('boards'));
    }

    public function store(Request $request){
        $display_board = DisplayBoard::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'organization' => $request->user()->organization_id
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
        $board = DisplayBoard::where('id',$request->slug)->first();
        if($board){
            return response()->json([
                'data' => $board
            ]);
        }
    }

    public function update(Request $request){
        $board = DisplayBoard::where('id',$request->slug)->first();
        if($board){
            $board->name = $request->name;
            $board->description = $request->description;
            $board->status = $request->status;
            $board = $board->save();
            if($board){
                $request->session()->flash('success','Board updated successfully !');
                return back();
            }
        }
    }

    public function delete(Request $request){
        $board = DisplayBoard::where('id',$request->slug)->first();
        if($board){
            $board->delete();
            return response()->json([
                'data' => 'Deleted succesfully'
            ]);
        }
    }
}
