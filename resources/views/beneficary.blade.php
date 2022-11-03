@extends('layouts.newapp')
@section('content')
<div class="container">
    <div class="row">
        @include('includes.dashnav')        
        <div class="col-md-8">
            <div class="card" style="margin-top:50px">
            @if (Session::has('status'))
            <p class="card-text">{{Session::get('message')}}</p>
            @endif
                <div class="card-header">{{ __('My Beneficary') }}</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-link" href="{{route('addbeneficary')}}">{{ __('Add Beneficeries') }}</a>
                    </h5>
                    <p class="card-text"></p>                
                </div>
                @foreach($data as $item)
                <div class="card-body">                    
                  <a href="{{route('update',['id'=> $item['id']])}}"><img src="{{asset('backend/assets/themes/images/icon/plus_icon.png')}}" alt="Add" width="15px" height="15px" /> </a> <p class="card-text">{{$item['name']}} | {{$item['account_no']}}</p>
                  <a href="{{route('delete',['id'=> $item['id']])}}"><img src="{{asset('backend/assets/themes/images/icon/minus_icon.png')}}" alt="Remove" width="15px" height="15px" /> </a> 
                    <p class="card-text">{{$item['bank_name']}} | {{$item['account_type']}}</p>
                </div>                
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection