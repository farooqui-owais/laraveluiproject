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
                
            <div class="card-header"> @if($data)   {{ __('Update Beneficary') }} @else {{__('Add Beneficary')}} @endif</div>
                <form method="POST" action="@if($data){{route('updatebeneficary')}}@else{{route('addbeneficary')}} @endif">
                @csrf
                
                <div class="row mb-3">    
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" @if($data) value="{{ $data['name'] }}" @endif required autocomplete="name" autofocus>
                            <input id="id" type="hidden" class="form-control" name="id" @if($data) value="{{ $data['id'] }}" @endif>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="account_no" class="col-md-4 col-form-label text-md-end">{{ __('Account No') }}</label>
                        <div class="col-md-6">
                            <input id="account_no" type="text" class="form-control @error('account_no') is-invalid @enderror" name="account_no" @if($data) value="{{ $data['account_no'] }}" @endif  required autocomplete="account_no" autofocus>
                            @error('account_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="confirm_acc_no" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Account No') }}</label>
                        <div class="col-md-6">
                            <input id="confirm_acc_no" type="text" class="form-control @error('confirm_acc_no') is-invalid @enderror" name="confirm_acc_no" @if($data) value="{{ $data['account_no'] }}" @endif required> 
                            @error('confirm_acc_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="bank_name" class="col-md-4 col-form-label text-md-end">{{ __('Bank') }}</label>
                        <div class="col-md-6">
                            <input id="bank_name" type="text" name="bank_name" @if($data) value="{{ $data['bank_name'] }}" @endif class="form-control @error('bank_name') is-invalid @enderror"   required>
                            @error('bank_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="account_type" class="col-md-4 col-form-label text-md-end">{{ __('Account Type') }}</label>
                        <div class="col-md-6">
                            <input id="account_type" type="text" class="form-control @error('account_type') is-invalid @enderror" @if($data) value="{{ $data['account_type'] }}" @endif name="account_type"  required>
                            @error('account_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                        @if($data)    {{ __('Update') }} @else {{__('Add')}} @endif
                        </button>
                    </div>
                </div>
                </form>
             </div>
        </div>
    </div>
</div>    
@endsection