@extends('layouts.master',['title'=>'Connexion administrateur'])
@section('content')
@include('layouts.partials.carou')
<br>
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
              
              height: 100px;
              "></div>
        <!-- Background image -->
      
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
              margin-top: -100px;
              background: #E8EAF3;
              backdrop-filter: blur(30px);
              ">
          <div class="card-body py-5 px-md-5">
      
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h2 class="fw-bold mb-5">Connexion Administrateur</h2>
                <form method="POST" action="{{ route('admin.auth') }}">
                    @csrf 
                  <div class="form-outline mb-4">
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Username or Email Address" class="form-control">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                  </div>
      
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" required  placeholder="Enter your Password" required class="form-control">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">
                    Connexion
                  </button>
                  <!-- Register buttons -->
                </form>
                @if(Session::get('error'))
                    <div class="col-md-12">
                        <div class="alert alert-danger">{{Session::get('error')}}</div>
                    </div>
                @endif
              </div>
            </div>
          </div>
        </div>
</section>
<br>
@endsection
