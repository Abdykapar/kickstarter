<?php

namespace App\Http\Controllers;

use App\Creator;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CreatorController extends Controller
{
    public function creator(){
        $member = Auth::user();
        $user = Creator::all();
        return view('welcome',compact('user','member'));
    }
}
