@extends('layouts.default',['title'=>'Connexion admin'])
@section('content')
@include('layouts.partials.carou')
<div class="wrapper bg-white">
        <div class="text-center"><p class="font-weight-bold">Formulaire de connexion pour l'administrateur</p></div>
        <form class="pt-3">
            <div class="form-group py-2">
                <div class="input-field">
                    <span class="far fa-user p-2"></span>
                    <input type="text" placeholder="Username or Email Address" required class="">
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="password" placeholder="Enter your Password" required class="">
                </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="remember">
                    <label class="option text-muted"> Remember me
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="ml-auto">
                    <a href="#" id="forgot">Forgot Password?</a>
                </div>
            </div>
            <button class="btn btn-block text-center my-3">Log in</button>
        </form>
    </div>
@stop