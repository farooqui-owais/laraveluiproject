<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use App\Providers\RouteServiceProvider;


class AuthController extends Controller
{
    

   public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|exists:users,email',
            'password' => 'required|string',
        ],
        [
            'email.exists' =>'This email does not exists',
        ]
    );
        $credentials = $request->only('email', 'password');
            
        $token = Auth::attempt($credentials);
       // $token = auth('api')->attempt($credentials);
        if (!$token) {
            $result =  response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);

            return back()->with('error','Incorrect Credentials ');
        }

        $user = Auth::user();
        $cookie = cookie('jwt',$token,60*24);
        $request->session()->put('loggedUser',$user->id);
        
       $res = response()->json([
                'status' => 'success',
                'user' => $user,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ])->withCookie($cookie);
       //     return redirect()->route('beneficary'); 
      //   dd($this->me());
      
      return redirect()->route('home');
   // return  redirect()->route('home')->with(['userToken'=>$userToken]);
    
   }    

    public function register(Request $request){
        
        
        $request->validate([
            'name' => 'required|string|max:255',
            'gender'=>'required|string|max:6',
            'email' => 'required|string|email|max:255|unique:users',
            'salutations'=>'required|string',
            'dob'=>'required|string',
            'phone_no' => 'required|string|min:10|unique:users',
            'address'=>'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'salutations' => $request->salutations,            
            'email' => $request->email,
         //   'gender' => $request->gender,
            'dob' => $request->dob,
            'phone_no' => $request->phone_no,
            'address' => $request->address,
           // 'country_id'=>$request->country_id,
           // 'state_id'=>$request->state_id,
           // 'city_id'=>$request->city_id,
            'password' => Hash::make($request['password']),
        ]);

        $token = Auth::login($user);
        $cookie = cookie('jwt',$token,60*24);
        $request->session()->put('loggedUser',$user->id);
        if(!$token){

            return back()->with('error','Something went wrong, Please try again.');
        }
       return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ])->withCookie($cookie);
        
       // return back()->with('success','New user has been registerd Successfully');
    }

    public function logout()
    {
        
        session()->pull('loggedUser');
        $cookie = Cookie::forget('jwt');
        //Auth::logout();
        return redirect()->route('login')->with('success','Successfully logged out');    
        
        
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }   

    public function me()
    {
        return response()->json(Auth::user());
    }

    public function users(){
        return Auth::user();
    }

}