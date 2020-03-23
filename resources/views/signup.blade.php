@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <x-register 
                  title="Register" 
                  field1="Name" 
                  field2="Email Address" 
                  field3="Password" 
                  field4="Confirm Password" 
                  url="register" 
                  nameField="name"
                  emailField="email"
                  passwordField="password"
                  passwordConfirmationField="password_confirmation"/>
            </div>
        </div>
    </div>
</div>
@endsection