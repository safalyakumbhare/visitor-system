<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function add(){
        return view('admin.add-visitor');
    }
}
