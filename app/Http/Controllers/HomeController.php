<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = \Auth::user();
        $name = $user->name;
        return view('home',compact('name'));
    }

    public function first(){
        return view('first');
    }

    public function profile(Request $request){
        $user = \Auth::user(); 
             
        $name = $user->name;        
        $lastActivty = \DB::table('sessions')->select('last_activity')->where('id', session()->getId())->first();
        return view('profile')->with('name',$name)->with('lastActivity',$lastActivty->last_activity);
    }

    public function account(){
        $user = \Auth::user();
            return view('account');
    }

    public function transactions(){
        $user = \Auth::user();
            return view('transactions');
    }
    public function transfer(){
        $user = \Auth::user();
            return view('transfer');
    }
    public function manageBeneficary(){
        $user = \Auth::user();
            return view('beneficary');
    }
    public function addBeneficary(){
        $data = array();
        return view('addbeneficary')->with('data',$data);
    }
}
