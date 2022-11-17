<?php

namespace App\Http\Controllers;

use App\Models\Beneficary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
use App\Providers\RouteServiceProvider;
class BeneficaryController extends Controller
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'account_no' => ['required', 'integer', 'max:11','min:11','confirmed','unique:users'],
            'bank_name' => ['required', 'string', 'max:255'],
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Beneficary::all();
        $data = json_decode($result,true);
        
        return view('beneficary')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try{
            $beneficary = new Beneficary();
            $beneficary->name = $request->name;
            $beneficary->account_no = $request->account_no;
            $beneficary->bank_name = $request->bank_name;
            $beneficary->account_type = $request->account_type;
            $beneficary->user_id = $request->user_id;

            if($beneficary->save()){
                Session::flash('message', 'Beneficary added successfully'); 
                Session::flash('status', 'success'); 
                
            }
        }
        catch(Exception $e){
            Session::flash('message', $e->getMessage()); 
            Session::flash('status', 'error'); 
        
        }
        return view('addbeneficary');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beneficary  $beneficary
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficary $beneficary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        try {
            $id = $request->id;        
            $beneficary = Beneficary::findOrFail($id);
            $beneficary->name= $request->name;
            $beneficary->account_no = $request->account_no;
            $beneficary->account_type = $request->account_type;
            $beneficary->bank_name = $request->bank_name;
            
            if($beneficary->save()){
                \Session::flash('message', 'Beneficary Updated successfully'); 
                \Session::flash('status', 'success'); 
                
            }
        }
        catch(\Exception $e){
            \Session::flash('message', $e->getMessage()); 
            \Session::flash('status', 'error'); 
        }
        $data = array();
        return view('updatebeneficary')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beneficary  $beneficary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficary $beneficary)
    {
        $id = $request->id;
        $result = Beneficary::findOrFail($id);
        $data = json_decode($result,true);
        return view('update')->with('data',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beneficary  $beneficary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        try{
            $beneficary = Beneficary::findOrFail($id);
            if($beneficary->delete()){
                \Session::flash('message', 'Beneficary Removed successfully'); 
                \Session::flash('status', 'success'); 
            }
        }
        catch(\Exception $e){
            \Session::flash('message', $e->getMessage()); 
            \Session::flash('status', 'error'); 
        }
        $data = array();
        return redirect()->route('home');
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
