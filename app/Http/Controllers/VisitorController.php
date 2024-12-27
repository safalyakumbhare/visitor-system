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
        return redirect()->route('admin')->with('success', 'Visitor added successfully');
    }
}
