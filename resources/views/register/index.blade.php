@extends('layouts.app')

@section('content')

<div class="container" style="width: 50em">
  <div class="card" style="width: 50em length: 50em;font-family:'Times new roman', Times, serif;">
     <div class="card-header" style="background-color: rgb(238, 234, 234)">
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post"> 
            @csrf
              <div class="form-floating mt-6">
                <input type="email" name="email" class="form-control rounded-top border-dark @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
              </div>
              <br>
              <div class="form-floating mt-6">
                <input type="password" name="password" class="form-control border-dark @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
              </div>
              <br>
              <div class="form-floating mt-6">
                <input type="number" name= "role_id" class="form-control rounded-bottom border-dark @error('role_id') is-invalid @enderror" id="role_id" placeholder="role_id" required value="{{ old('role_id') }}">
                <label for="role_id">Role Id</label>
                @error('role_id')
                <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
              </div>
            
              <button class="w-100 btn btn-dark mt-3" type="submit">Register</button>
            
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
@endsection