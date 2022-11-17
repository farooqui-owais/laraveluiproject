@extends('layouts.newapp')
@section('content')
<div class="container">    
    <div class="row">
        @include('includes.dashnav')
        <div class="col-md-8">
            <div class="card" style="margin-top:50px">
                <div class="card-header">{{ __('Transactions') }}</div>  
                <div class="card-body">
                    <span class="card-title">{{ __('Account Number') }} XXXXXXXXXXXXX</span>
                  <!--  <span></span>     -->      
                    <span class="card-title">{{ __('Closing Balance(INR)') }} 30000 INR</span>  
                     <!--  <span></span>      -->         
                </div>               
                       
                <table class="table">
                <thead>
                    <tr>
                        <th>Trans. ID</th>
                        <th>Date & Time</th>
                        <th>Remark</th>
                        <th>Debit (INR)</th>
                        <th>Credit (INR)</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100398</td>
                        <td>2022-09-29 05:57</td>                
                        <td>Opening Balance</td>
                        <td>0</td>
                        <td>10000</td>
                        <td>10000</td>
                    </tr>
                    <tr>
                        <td>100399</td>
                        <td>2022-09-30 09:57</td>                
                        <td>Received from</td>
                        <td>0</td>
                        <td>20000</td>
                        <td>30000</td>
                    </tr>
                </tbody>
               </table>

            </div>
        </div>
    </div>
</div>
@endsection