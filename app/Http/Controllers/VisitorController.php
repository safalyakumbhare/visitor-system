<?php

// namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\visitor;
use App\Models\User;

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
        return redirect()->route('admin.visitor-in')->with('success', 'Visitor added successfully');
    }

    public function show()
    {
        $user_data = user::where('role', '2')->get();
        $visitors = visitor::orderBy('created_at', 'desc')->paginate(10);
        // $visitors = visitor::paginate(10);
        return view('admin.visitor', compact('visitors'),compact('user_data'));
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
        $visitors_today = visitor::where('user_id', $user_id)->whereDate('created_at', now()->setTimezone('Asia/Kolkata'))->get();
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

    public function visitor_in(){
        $user_data = user::where('role','2')->get();

        $visitors_in = visitor::where('status', 'in')->paginate(10);
        return view('admin.visitor-in', compact('visitors_in','user_data'));
    }


    public function admin_count(){

        $user = User::where('role',2)->count();
        $visitor = visitor::count();
        $visitor_in = visitor::where('status','in')->count();
        $visitor_today = visitor::whereDate('date_of_visit',now()->setTimezone('Asia/Kolkata'))->count();

        return view('admin.admin', compact('user','visitor','visitor_in','visitor_today'));
    }
    

    public function visitor_today(){
        $user_data = user::where('role','2')->get();
        $visitors_today = visitor::orderBy('created_at','desc')->whereDate('date_of_visit',now()->setTimezone('Asia/Kolkata'))->paginate(10);
        return view('admin.visitor-today', compact('visitors_today','user_data'));
    }


}
