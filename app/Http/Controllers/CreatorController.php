<?php

namespace App\Http\Controllers;

use App\Category;
use App\Creator;
use App\Project;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CreatorController extends Controller
{
    public function creator(){
        $member = Auth::user();
        $user = User::find(2);
        //dd($user->name);
        //dd($name);
        $creator = new Creator('country','Turkey');

        $user->creator()->save($creator);
        return view('welcome',compact('user','member'));
    }

    public function create(){
        return view('user/create');
    }

    public function pcreate(Request $request){
        $project = Project::create($request->all());
        return view('user/show',compact('project'));
    }
    public function profile(){
        return view('user/index');
    }

    /**
     * @return mixed
     */
    public function project(){
        $proj = Project::find(7);
        //dd($proj);
        $p = $proj->category()->get();
        return $p;
    }
}
