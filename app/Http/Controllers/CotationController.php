<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class CotationController extends Controller
{
    public function cotation_apporter()
    {
     return view('pages.cotation.cotation_apporter');
    }
    public function cotation_apporter_automobile()
    {
     return view('pages.cotation.cotation_apporter_automobile');
    }
     public function cotation_apporter_habitation()
    {
     return view('pages.cotation.cotation_apporter_habitation');
    }
     public function cotation_apporter_voyage()
    {
     return view('pages.cotation.cotation_apporter_voyage');
    }
    public function cotation_apporter_automobile_vehicule()
    {
     return view('pages.cotation.cotation_apporter_automobile_vehicule');
    }
    public function cotation_apporter_automobile_deux_roues()
    {
     return view('pages.cotation.cotation_apporter_automobile_deux_roues');
    }
    public function cotation_apporter_automobile_tpv()
    {
     return view('pages.cotation.cotation_apporter_automobile_tpv');
    }
    public function calcule_assurance_vehicule()
    {   
      return view('pages.cotation.resultat_assurance');
    }
    public function calcule_assurance_tpv()
    {   
      return view('pages.cotation.resultat_assurance_tpv');
    }
    public function pdf_pres_contrat()
    {   
      return view('pages.cotation.pdf_pres_contrat');
    }
    public function dashboard_apporter()
    {   
      $apporter=DB::table('users')->where('id',Auth::user()->id )->get(); 
      $requete=DB::table('assurances')->where('niveau','vehicule')->where('valider','1')->orderBy('id','desc')->paginate(10); 
      $moisActuel = now()->format('F');   
      $premierJour = Carbon::now()->firstOfMonth();
      $dernierJour = Carbon::now()->lastOfMonth();  
      return view('pages.cotation.dashboard_apporter',compact('requete','apporter','moisActuel','premierJour','dernierJour'));
     
    }
    public function dashboard_apporter_voyage()
    {   
      $apporter=DB::table('users')->where('id',Auth::user()->id )->get();
      $moisActuel = now()->format('F');   
      $premierJour = Carbon::now()->firstOfMonth();
      $dernierJour = Carbon::now()->lastOfMonth(); 
      $voyages=DB::table('assurance_voyages')->orderBy('id','desc')->where('valider','1')->paginate(10);
      return view('pages.cotation.dashboard_apporter_voyage',compact('voyages','moisActuel','apporter','premierJour','dernierJour'));
     
    }
    public function dashboard_apporter_deux_roues()
    {   
      $apporter=DB::table('users')->where('id',Auth::user()->id )->get();
      $moisActuel = now()->format('F');   
      $premierJour = Carbon::now()->firstOfMonth();
      $dernierJour = Carbon::now()->lastOfMonth(); 
      $requete=DB::table('assurances')->orderBy('id','desc')->where('niveau','deux roues')->where('valider','1')->paginate(10); 
      return view('pages.cotation.dashboard_apporter_deux_roues',compact('requete','apporter','moisActuel','premierJour','dernierJour'));
    }
    public function dashboard_apporter_tpv()
    {   
      $apporter=DB::table('users')->where('id',Auth::user()->id )->get();
      $moisActuel = now()->format('F');   
      $premierJour = Carbon::now()->firstOfMonth();
      $dernierJour = Carbon::now()->lastOfMonth(); 
      $requete=DB::table('assurances')->orderBy('id','desc')->where('niveau','tpv')->where('valider','1')->paginate(10); 
      return view('pages.cotation.dashboard_apporter_tpv',compact('requete','apporter','moisActuel','premierJour','dernierJour'));
    }
    public function cotation_apporter_document_axa()
    {   
      $req=DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('assurance_choisit' => "axa"));
      DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('responsabilite_civile' => session()->get('prime_net_axa_rc')));
      DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('prime_nette' => session()->get('prime_net_axa')));
      DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('taxes' => session()->get('taxe_axa')));
      DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('accessoires' => session()->get('accessoir_axa')));
      DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('rga' => session()->get('rga_axa')));
      DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('prime_ttc' => session()->get('prime_ttc_axa')));

      return view('pages.cotation.cotation_apporter_document_axa');  
    }
    public function cotation_apporter_document_axa_tpv()
    {   
      $req=DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('assurance_choisit' => "axa"));
      DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('responsabilite_civile' => session()->get('prime_net_axa_rc_tpv')));
      DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('prime_nette' => session()->get('prime_net_axa_tpv')));
      DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('taxes' => session()->get('taxe_axa_tpv')));
      DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('accessoires' => session()->get('accessoir_axa_tpv')));
      DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('rga' => session()->get('rga_axa_tpv')));
      DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('prime_ttc' => session()->get('prime_ttc_axa_tpv')));

      return view('pages.cotation.cotation_apporter_document_axa_tpv');  
    }
    public function cotation_apporter_document_axa_voyage()
    {   
      DB::table('assurance_voyages')->where('id', session()->get('id_voyage'))->update(array('assurance_choisit' => "axa"));
      DB::table('assurance_voyages')->where('id', session()->get('id_voyage'))->update(array('prime_ttc' => session()->get('prime_ttc_axa_voyage')));
      return view('pages.cotation.cotation_apporter_document_axa_voyage');  
    }
    public function cotation_apporter_document_axa_deux_roues()
    {   
      $req=DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('assurance_choisit' => "axa"));
      DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('responsabilite_civile' => session()->get('prime_net_axa_rc_deux_roues')));
      DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('prime_nette' => session()->get('prime_net_axa_deux_roues')));
      DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('taxes' => session()->get('taxe_axa_deux_roues')));
      DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('accessoires' => session()->get('accessoir_axa_deux_roues')));
      DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('rga' => session()->get('rga_axa_deux_roues')));
      DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('prime_ttc' => session()->get('prime_ttc_axa_deux_roues')));

      return view('pages.cotation.cotation_apporter_document_axa_deux_roues');  
    }
    public function calcule_assurance_voyage()
    {   
        //$requete=DB::table('assurances')->get(); 
      return view('pages.cotation.calcule_assurance_voyage');  
    }
    public function calcule_assurance_deux_roues()
    {   
        //$requete=DB::table('assurances')->get(); 
      return view('pages.cotation.calcule_assurance_deux_roues');  
    }
}
