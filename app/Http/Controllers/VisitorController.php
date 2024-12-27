<?php

namespace App\Http\Controllers;

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
        $visitor->update(['out_time' => now()]);
        $visitor->update(['status' => 'out']);
        return redirect()->route('admin.visitor')->with('success', 'Visitor out successfully');
    }
}
