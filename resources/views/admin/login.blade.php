@extends('layouts.master',['title'=>'Connexion administrateur'])
@section('content')
@include('layouts.partials.carou')
<div class="wrapper" style="">
    <div class="text-center"><p class="font-weight-bold">Formulaire de connexion pour l'administrateur</p></div>
        <form class="pt-3" method="POST" action="{{ route('admin.auth') }}">
        @csrf    
        <div class="form-group py-2">
                <div class="input-field">
                    <span class="far fa-user p-2"></span>
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Username or Email Address" required class="">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="password" name="password" required  placeholder="Enter your Password" required class="">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
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
            <button type="submit" class="btn btn-block text-center my-3">Log in</button>
        </form>
         @if(Session::get('error'))
        <div class="col-md-12">
     <div class="alert alert-danger">{{Session::get('error')}}</div>
        </div>
      @endif
    </div>

@endsection
