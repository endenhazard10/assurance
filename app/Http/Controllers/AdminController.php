<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('error', 'Adresse Mail ou mot de passe incorrect');
            return back()->withInput($request->only('email'));
        }
    }
    public function creer_apporter()
    {
        return view('admin.creer_apporter');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function enregistrer_apporter(request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'code_apporter' => 'required|unique:users',
            'telephone' => 'required',
            'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/',
        ], [
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'code_apporter.unique' => 'Le code apporter est déjà utilisée.',
            'password.required' => 'Le champ mot de passe est obligatoire.',
            'password.string' => 'Le champ mot de passe doit être une chaîne de caractères.',
            'password.min' => 'Le mot de passe doit avoir au moins 8 caractères.',
            'password.regex' => 'Le mot de passe doit contenir au moins une lettre majuscule et un chiffre.',
        ]);
        $hashedPassword = bcrypt($request['password']);
        $enregistrer = new User();
        $enregistrer->name = $request['nom'];
        $enregistrer->prenom = $request['prenom'];
        $enregistrer->email = $request['email'];
        $enregistrer->password = $hashedPassword;
        $enregistrer->code_apporter = $request['code_apporter'];
        $enregistrer->adresse = $request['adresse'];
        $enregistrer->telephone = $request['telephone'];
        $enregistrer->save();
        if ($enregistrer->id) {
            return redirect()->back()->with('success', 'Apporter enregistrer avec succés!');
        } else {
            return redirect()->back()->with('erroe', "Erreur pendant l'insertion!");
        }
        //dd($enregistrer);
    }
    public function user_detail(request $request)
    {
        $id = $request->id;
        $mois = $request->mois;
        $years = $request->years;

        return view('admin.dashboard_detail', compact('id', 'mois', 'years'));

    }
    public function assurance_detail(request $request)
    {
        $id = $request->id;

        return view('admin.dashboard_detail_assurance', compact('id'));

    }
}
