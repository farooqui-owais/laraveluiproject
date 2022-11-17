<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{   

    /*
    public function __construct()
    {
        $this->middleware('auth:api');
    }*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHome(){
        $response = $client->request('POST', '/api/user', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
        ]);
        dd(Auth::user());
    }

    public function index()
    {  
    
        
        $data = ['LoggeduserInfo'=>User::where('id','=',session('loggedUser'))->first()];
       
        //return response()->json(Auth::user());
        return view('home')->with(['data'=>$data]);
    }

    public function first(){
        return view('first');
    }

    public function profile(Request $request){
        $data = ['LoggeduserInfo'=>User::where('id','=',session('loggedUser'))->first()];
        return view('profile')->with(['data'=>$data]);
    }

    public function account(){
        $user = Auth::user();
            return view('account');
    }

    public function transactions(){
        $user = Auth::user();
            return view('transactions');
    }
    public function transfer(){
        $user = Auth::user();
            return view('transfer');
    }
    public function manageBeneficary(){
        $user = Auth::user();
            return view('beneficary');
    }
    public function addBeneficary(){
        $data = array();
        return view('addbeneficary')->with('data',$data);
    }
}
