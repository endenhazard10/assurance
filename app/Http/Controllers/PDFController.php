<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use App\Models\AssuranceVoyage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

use Illuminate\Support\Facades\Redirect;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function proposition_contrat_assurance_vehicule()
    {
        $pdf = PDF::loadView('proposition_contrat_assurance_vehicule');
        return $pdf->download('proposition_contrat_assurance_vehicule.pdf');
    }
    public function proposition_contrat_assurance_deux_roues()
    {
        $pdf = PDF::loadView('proposition_contrat_assurance_deux_roues');
        return $pdf->download('proposition_contrat_assurance_deux_roues.pdf');
    }
    public function proposition_contrat_assurance_tpv()
    {
        $pdf = PDF::loadView('proposition_contrat_assurance_tpv');
        return $pdf->download('proposition_contrat_assurance_tpv.pdf');
    }
    public function proposition_contrat_assurance_mrh()
    {
        $pdf = PDF::loadView('proposition_contrat_assurance_mrh');
        return $pdf->download('proposition_contrat_assurance_mrh.pdf');
    }
    public function facture_assurance_vehicule(){
        require app_path('Http/fichier/enregistrer_vehicule.php');
        $pdf = PDF::loadView('facture_assurance_vehicule',$data);
        return $pdf->download('facture_assurance_vehicule.pdf');
    }
    public function facture_assurance_deux_roues(){
        require app_path('Http/fichier/enregistrer_deux_roues.php');
        $pdf = PDF::loadView('facture_assurance_deux_roues',$data);
        return $pdf->download('facture_assurance_deux_roues.pdf');
    }
    public function facture_assurance_tpv(){
        require app_path('Http/fichier/enregistrer_tpv.php');
        $pdf = PDF::loadView('facture_assurance_tpv',$data);
        return $pdf->download('facture_assurance_tpv.pdf');
    }
    public function facture_assurance_voyage(){
        require app_path('Http/fichier/enregistrer_voyage.php');
        $pdf = PDF::loadView('facture_assurance_voyage',$data);
        return $pdf->download('facture_assurance_voyage.pdf');
    }
    public function facture_assurance_mrh(){
        require app_path('Http/fichier/enregistrer_mrh.php');
        $pdf = PDF::loadView('facture_assurance_mrh',$data);
        return $pdf->download('facture_assurance_mrh.pdf');
    }
    public function contrat_assurance_tpv()
    {
        require app_path('Http/fichier/enregistrer_tpv.php');
        $pdf = PDF::loadView('contrat_assurance_tpv', $data);
        return $pdf->download('contrat_assurance_tpv.pdf');
    }
    public function contrat_assurance_voyage()
    {
        require app_path('Http/fichier/enregistrer_voyage.php');
        $pdf = PDF::loadView('contrat_assurance_voyage',$data);
        return $pdf->download('contrat_assurance_voyage.pdf');
    }
    public function contrat_assurance_mrh()
    {
        require app_path('Http/fichier/enregistrer_mrh.php');
        $pdf = PDF::loadView('contrat_assurance_mrh', $data);
        return $pdf->download('contrat_assurance_mrh.pdf');
    }
    public function contrat_assurance_vehicule()
    {
        
        require app_path('Http/fichier/enregistrer_vehicule.php');
        $pdf = PDF::loadView('contrat_assurance_vehicule', $data);
        return $pdf->download('contrat_assurance_vehicule.pdf');
        
    }
    public function contrat_assurance_deux_roues()
    {
        require app_path('Http/fichier/enregistrer_deux_roues.php');
        $pdf = PDF::loadView('contrat_assurance_deux_roues', $data);
        return $pdf->download('contrat_assurance_deux_roues.pdf');
    }
    public function proposition_contrat_assurance_voyage()
    {
        $pdf = PDF::loadView('proposition_contrat_assurance_voyage');
        return $pdf->download('proposition_contrat_assurance_voyage.pdf');
    }

    // public function carte_jaune_assurance_tpv()
    // {
    //     $assurance = DB::table('assurances')->where('id', '=', session()->get('id_tpv'))->get();
    //     $data = [
    //         'title' => 'Welcome to LaravelTuts.com',
    //         'date' => date('m/d/Y'),
    //         'assurance' => $assurance,
    //     ];

    //     $pdf = PDF::loadView('carteJaune', $data);
    //     return $pdf->download('carte_jaune.pdf');
    // }
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
