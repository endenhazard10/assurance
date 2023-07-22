<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $requete=DB::table('users')->orderBy('id','desc')->paginate(10);
        return view('admin.dashboard',compact('requete'));
    }
}
