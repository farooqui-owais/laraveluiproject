@extends('layouts.newapp')
@section('content')
<div class="container">
    <div class="row">
        @include('includes.dashnav')        
        <div class="col-md-8">
            <div class="card" style="margin-top:50px">
                <div class="card-header">{{ __('Account') }}</div>
                <div class="card-body">
                    <span class="card-title">Account Name : 
                    {{Auth::user()->name}} </span>              
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
                <div class="card-body">
                    <h5 class="card-title">IFSC</h5>
                    <p class="card-text"></p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">View Transactions</h5>
                    <p class="card-text"></p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                    <a class="btn btn-link" href="{{ route('transfer') }}">{{ __('Transfer Amount') }}</a>
                    </h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection