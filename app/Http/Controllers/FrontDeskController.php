<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FrontDesk;


class FrontDeskController extends Controller
{
    public function store(Request $request){
        $frontdesk = FrontDesk::create([
            'name' => $request->name,
            'ip' => $request->ip,
            'service_id' => $request->service,
            'board_id' => $request->board,
            'status' => $request->status,
            'organization' => $request->user()->organization
        ]);
        if($frontdesk){
            $request->session()->flash('success','Fronddesk Configuration created successfully!');
            return back();
        }
    }

    public function editView(Request $request){
        $frontdesk = FrontDesk::where('id',$request->slug)->first();
        if($frontdesk){
            return response()->json([
                'data' => $frontdesk
            ]);
        }
    }

    public function update(Request $request){
        $frontdesk = FrontDesk::where('id',$request->slug)->first();
        if($frontdesk){
            $frontdesk->name = $request->name;
            $frontdesk->ip = $request->ip;
            $frontdesk->service_id = $request->service;
            $frontdesk->board_id = $request->board;
            $frontdesk->status = $request->status;
            $frontdesk = $frontdesk->save();
            if($frontdesk){
                $request->session()->flash('success','Frontdesk configuration updated successfully!');
                return back();
            }
        }
        return back();
    }

    public function delete(Request $request){
        $frontdesk = FrontDesk::where('id',$request->slug)->first();
        if($frontdesk){
            $frontdesk = $frontdesk->delete();
            if($frontdesk ){
                return response()->json([
                    'data' => 'Deleted successfully'
                ]);
            }
        }
    }

}
