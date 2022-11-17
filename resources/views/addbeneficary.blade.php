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
                
            <div class="card-header"> {{__('Add Beneficary')}} </div>
                <form method="POST" action="{{route('savebeneficary')}}">
                @csrf
                
                <div class="row mb-3">    
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus>
                            <input id="user_id" type="hidden" class="form-control" name="user_id"  value="{{Session::get('loggedUser')}}" >
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="account_no" class="col-md-4 col-form-label text-md-end">{{ __('Account No') }}</label>
                        <div class="col-md-6">
                            <input id="account_no" type="text" class="form-control " name="account_no" value="" required autocomplete="account_no" autofocus>
                            
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="confirm_acc_no" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Account No') }}</label>
                        <div class="col-md-6">
                            <input id="confirm_acc_no" type="text" class="form-control" name="confirm_acc_no" value="" required> 
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="bank_name" class="col-md-4 col-form-label text-md-end">{{ __('Bank') }}</label>
                        <div class="col-md-6">
                            <input id="bank_name" type="text" name="bank_name"  value=""  class="form-control"   required>
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="account_type" class="col-md-4 col-form-label text-md-end">{{ __('Account Type') }}</label>
                        <div class="col-md-6">
                            <input id="account_type" type="text" class="form-control" value="" name="account_type"  required>
                            
                        </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                           {{__('Add')}}
                        </button>
                    </div>
                </div>
                </form>
             </div>
        </div>
    </div>
</div>    
@endsection