<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TarifRcAutomobile;
use App\Models\Assurance;
use App\Models\ThierceCompleteAutomobile;
use Illuminate\Support\Facades\DB;
use PDF;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function contrat_assurance_vehicule()
    {
        $assurance = DB::table('assurances')->where('id','=',session()->get('id_vehicule'))->get();
        $commissions_accessoires=($assurance[0]->accessoires/100)*100;
        $commissions_apporteur=($assurance[0]->prime_ttc/100)*20;
        DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('commissions_apporteur' => $commissions_apporteur,'commissions_accessoires' => $commissions_accessoires));
        $assurance = DB::table('assurances')->where('id','=',session()->get('id_vehicule'))->get();
        $calcule = DB::table('assurances')->where('niveau','=','vehicule')->where('valider','=','1')->get();
        $sumOfCommissions = $calcule->sum('commissions_apporteur');
        //dd($sumOfCommissions);
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance
        ];    
        DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('valider' =>  "1")); 
        $pdf = PDF::loadView('contrat_assurance_vehicule', $data);
        return $pdf->download('contrat_assurance_vehicule.pdf');
    }
    public function carte_jaune_assurance_vehicule()
    {
        $assurance = DB::table('assurances')->where('id','=',session()->get('id_vehicule'))->get();
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance
        ];   
        
        $pdf = PDF::loadView('carteJaune', $data);
        return $pdf->download('carte_jaune.pdf');
    }

    public function contrat_assurance_tpv()
    {
        $assurance = DB::table('assurances')->where('id','=',session()->get('id_tpv'))->get();
        $commissions_accessoires=($assurance[0]->accessoires/100)*100;
        $commissions_apporteur=($assurance[0]->prime_ttc/100)*20;
        DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('commissions_apporteur' => $commissions_apporteur,'commissions_accessoires' => $commissions_accessoires));
        $assurance = DB::table('assurances')->where('id','=',session()->get('id_tpv'))->get();
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance
        ];    
        DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('valider' =>  "1")); 
        $pdf = PDF::loadView('contrat_assurance_tpv', $data);
        return $pdf->download('contrat_assurance_tpv.pdf');
    }
    public function contrat_assurance_voyage()
    {
        $assurance = DB::table('assurance_voyages')->where('id','=',session()->get('id_voyage'))->get();
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance
        ];    
        DB::table('assurance_voyages')->where('id', session()->get('id_voyage'))->update(array('valider' =>  "1")); 
        $pdf = PDF::loadView('contrat_assurance_voyage', $data);
        return $pdf->download('contrat_assurance_voyage.pdf');
    }
    public function contrat_assurance_deux_roues()
    {
        $assurance = DB::table('assurances')->where('id','=',session()->get('id_deux_roues'))->get();
        $commissions_accessoires=($assurance[0]->accessoires/100)*100;
        $commissions_apporteur=($assurance[0]->prime_ttc/100)*20;
        DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('commissions_apporteur' => $commissions_apporteur,'commissions_accessoires' => $commissions_accessoires));
        $assurance = DB::table('assurances')->where('id','=',session()->get('id_deux_roues'))->get();
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance
        ];    
        DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('valider' =>  "1")); 
        $pdf = PDF::loadView('contrat_assurance_deux_roues', $data);
        return $pdf->download('contrat_assurance_deux_roues.pdf');
    }
    public function carte_jaune_assurance_tpv()
    {
        $assurance = DB::table('assurances')->where('id','=',session()->get('id_tpv'))->get();
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance
        ];   
        
        $pdf = PDF::loadView('carteJaune', $data);
        return $pdf->download('carte_jaune.pdf');
    }
    // public function generateContrat()
    // {
    //     $data = [
    //         'title' => 'Welcome to LaravelTuts.com',
    //         'date' => date('m/d/Y'),
    //         'users' => $users
    //     ];     
    //     $pdf = PDF::loadView('contratPdf', $data);
    //     return $pdf->download('laraveltuts.pdf');
    // }
}