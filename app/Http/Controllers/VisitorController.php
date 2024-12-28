<?php

// namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\visitor;

class VisitorController extends Controller
{
    public function add()
    {
        return view('admin.add-visitor');
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
        $user_id = Auth::user()->flat_no;
        $visitors = visitor::where('flat_number', $user_id)->get();
        return view('user.guest', compact('visitors'));
    }


    public function count()
    {
        $flat_no = Auth::user()->flat_no;
        $visitors = visitor::where('flat_number', $flat_no)->count();
        return view('user.dashboard', compact('visitors'));

        
    }

    
}
