@extends('layouts.newapp')
@section('content')
<div class="container">    
    <div class="row">
        @include('includes.dashnav')
        <div class="col-md-8">
            <div class="card" style="margin-top:50px">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <img src="{{asset('backend/assets/themes/images/icon/avatar-user-profile-male-logo.jpg')}}"   alt="logo" width="100px" height="100px">
                    <div class="card-body">
                       <h5 class="card-title">Name</h5>
                       <p class="card-text">{{Auth::user()->name}}</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Gender</h5>
                        <p class="card-text">Male</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Date Of Birth</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Address</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Email</h5>
                        <p class="card-text">{{Auth::user()->email}}</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">{{Auth::user()->phone_no}}</p>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">Aadhar Number</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pan Number</h5>
                        <p class="card-text"></p>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">Bank Branch</h5>
                        <p class="card-text"></p>
                    </div>        
            </div>
        </div>
        @include('includes.right-sidebar')
    </div>
</div>
@endsection