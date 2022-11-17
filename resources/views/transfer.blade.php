@extends('layouts.newapp')
@section('content')
<div class="container">    
    <div class="row">
        @include('includes.dashnav')
        <div class="col-md-8">
            <div class="card" style="margin-top:50px">
                <div class="card-header">{{ __('Account') }}</div>        
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-link" href="{{route('beneficary')}}">{{ __('Manage Beneficeries') }}</a>
                    </h5>
                    <p class="card-text"></p>                
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-link" href="#">{{ __('One Time Payment') }}</a>
                    </h5>
                    <p class="card-text"></p>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




