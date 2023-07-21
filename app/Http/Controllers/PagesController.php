<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function index()
    { 
     return view('welcome');
    }
    public function connexion_apporter()
    {
     return view('pages.connexion_apporter');
    }
    public function connexion_admin()
    {
     return view('pages.connexion_admin');
    }
    
}
