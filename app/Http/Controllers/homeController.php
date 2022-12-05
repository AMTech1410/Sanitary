<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){


        $users = User::where('roles','SubAdmin')->count();
        $superAdmins=User::where('roles','SuperAdmin')->count();

        return view('home',compact('users','superAdmins'));
    }


}
