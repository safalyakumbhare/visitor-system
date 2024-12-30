<?php

// namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\visitor;

class VisitorController extends Controller
{
    public function add($id)
    {
        // return $id;
        $user_id = $id;
        return view('admin.add-visitor',compact('user_id'));
    }

    public function store(Request $request)
    {

        visitor::create($request->all());
        return redirect()->route('admin.visitor')->with('success', 'Visitor added successfully');
    }

    public function show()
    {
        $visitors = visitor::all();
        return view('admin.visitor', compact('visitors'));
    }

    public function visitorout($id){
        $visitor = visitor::find($id);

        $visitor->update(['out_time' => now()->setTimezone('Asia/Kolkata')]);
        $visitor->update(['status' => 'out']);
        return redirect()->route('admin.visitor')->with('success', 'Visitor out successfully');
    }

    public function  guest()
    {
        $user_id = Auth::user()->id;
        $visitors = visitor::where('user_id', $user_id)->get();
        return view('user.guest', compact('visitors'));
    }


    public function count()
    {
        $user_id = Auth::user()->id;
        $visitors_today = visitor::where('user_id', $user_id)->whereDate('created_at', now()->setTimezone('Asia/Kolkata'))->count();
        $visitors_in = visitor::where('user_id', $user_id)->where('status', 'in')->whereDate('created_at', now()->setTimezone('Asia/Kolkata'))->count();
        $visitors_out = visitor::where('user_id', $user_id)->where('status', 'out')->whereDate('created_at', now()->setTimezone('Asia/Kolkata'))->count();
        $visitors = visitor::where('user_id', $user_id)->count();

        return view('user.dashboard', compact('visitors_today','visitors_in','visitors_out','visitors'));

        
    }


    public function guest_today(){
        $user_id =  Auth::user()->id;
        $visitors_today = visitor::where('user_id', $user_id)->whereDate('created_at', now()->setTimezone('Asia/Kolkata'))->get();
        return view('user.today_guest', compact('visitors_today'));
    }

    

    

    
}
