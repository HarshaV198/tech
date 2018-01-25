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


}
