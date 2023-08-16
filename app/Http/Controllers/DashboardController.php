<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $requete = DB::table('assurances')->orderBy('id', 'desc')->paginate(10);
        return view('admin.dashboard', compact('requete'));
    }
}
