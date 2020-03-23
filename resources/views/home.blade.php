@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                You are logged in!

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @component('components.userlist',[
                    "title"=>"User List" ,"users"=>$users ,"class"=>"text-info", "dismissable"=>"false"
                    ])
                    
                    @slot('heading')
                    Success
                    @endslot
                    @slot('cancelhref')
                    http://localhost:8000/home
                    @endslot
                    @slot('addhref')
                    http://localhost:8000/add
                    @endslot
                    User Listing
                    @endcomponent

                </div>
            </div>
        </div>
    </div>
</div>
@endsection