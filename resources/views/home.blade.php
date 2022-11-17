@extends('layouts.newapp')
@section('content')
<div class="container">    
    <div class="row">
        @include('includes.dashnav')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>
                <div class="card-body">
                    <span class="card-title">Account Name : 
                    {{$data['LoggeduserInfo']->name}} </span>              
                    <span class="card-title">Account Number :</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Account Type</h5>
                    <p class="card-text"></p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Available Balance</h5>
                    <p class="card-text"></p>
                </div>                
            </div>
        </div>
        
    </div>
</div>
@endsection