<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function callName(){
        $users = User::all(); 
        return view('layouts.admin-template', ['users'=>$users]);
        
    } 
}
