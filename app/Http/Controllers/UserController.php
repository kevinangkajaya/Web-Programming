<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function loginPage(){
        return view('login');
    }
    public function login(Request $request){
        $data = User::where('email',$request->email)->first();
        if($data != null){
            if(($data->password==$request->password)){
                Session::put("name",$data->name);
                Session::put("role",$data->role);
                Session::put("email",$data->email);
                Session::put("isLogin",TRUE);
                if($request->has('checkbox')){
                    Cookie::queue("email",$request->email,3600);
                    Cookie::queue("password",$request->password,3600);
                }               
                return redirect('/cloth');
            } else{
                return redirect()->back()->withErrors("Invalid Password");
            }
        } else{
            return redirect()->back()->withErrors("Invalid Email");
        } 
    } 

    public function registerPage(){
        return view('register');
    }

    public function register(Request $req){
        $validate = Validator::make($req->all(),[
            'fullName' => 'required',
            'userEmail' => array('required','email','unique:users,email'),
            'password' => array('required',
                'alpha_dash',
                'min:5',
                'confirmed'
            ),
            'userPhone' => array('required','digits_between:11,12'),
            'userGender' => array('required','in:Male,Female'),
            'userAddress' => array('required'),
            'userPfp' => array('image','max:5000')
        ]);

        $pos = strpos($req->userAddress, 'street');        

        if($validate->fails()){
            return redirect() ->back()->withErrors($validate);
        } else if($pos === false){
            return redirect() ->back()->withErrors('Address must contains "street" word');
        } else {

            $newUser = new User();
            $newUser->name = $req->fullName;
            $newUser->email = $req->userEmail;
            $newUser->password = $req->password;
            $newUser->phone = $req->userPhone;
            $newUser->gender = $req->userGender;
            $newUser->address = $req->userAddress;         
            if($req->has('userPfp')){
                $image = $req->userPfp;  
                $image->move('images/pfp', $image->getClientOriginalname());
                $newUser->pfp = $image->getClientOriginalname();
            }
            $newUser->role = 'member';
            $newUser->save();
            return redirect('/loginPage');
        }
    }
    public function profilePage(){
        $email = Session::get('email');
        $user = User::where('email',$email)->first();
        return view('/Profile/view',compact('user'));
    }
    public function updateProfilePage(){
        $email = Session::get('email');
        $user = User::where('email',$email)->first();
        return view('/Profile/update',compact('user'));
    }
    public function updateProfile(Request $req){
        $email = Session::get('email'); 
        $user = User::where('email',$email)->first();

        $validate = Validator::make($req->all(),[
            'fullName' => 'required',
            'userEmail' => array('required','email','unique:users,email,'.$user->id),            
            'userPhone' => array('required','digits_between:11,12'),
            'userGender' => array('required','in:Male,Female'),
            'userAddress' => array('required'),
            'userPfp' => array('image','max:5000')
        ]);

        $pos = strpos($req->userAddress, 'street');        

        if($validate->fails()){
            return redirect() ->back()->withErrors($validate);
        } else if($pos === false){
            return redirect() ->back()->withErrors('Address must contains "street" word');
        } else {
            $user->name = $req->fullName;
            $user->email = $req->userEmail;
            $user->phone = $req->userPhone;
            $user->gender = $req->userGender;
            $user->address = $req->userAddress;         
            if($req->has('userPfp')){
                $image = $req->userPfp;  
                $image->move('images/pfp', $image->getClientOriginalname());
                $user->pfp = $image->getClientOriginalname();
            }
            $user->save();
            return redirect('/profile');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('');
    }

    public function insert(){
        return view('insert');
    }

    public function insertUser(Request $req){
        $message = [
            'required'=> 'Nama belum diisi',
        ];

        $validate = Validator::make($req->all(), ['nama'=>'required|max:255',
                                                    'email'=>'required',
                                                    'password'=>'required',
                                                    'phone'=>'required',
                                                    'address'=>'required',
                                                    'gender'=>'required'], $message);
        
        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }else{
            $newUser = new User();
            $newUser -> name = $req->username;
            $newUser -> email = $req->useremail;
            $newUser -> password = $req->userpassword;
            $newUser -> confirmpassword = $req->userconfirmpass;
            $newUser -> phone = $req->userphone;
            $newUser -> address = $req->useraddress;
            $newUser -> gender = $req->usergender;
            $newUser -> imageDirectory = $image->getClientOriginalname();
            $newUser -> save();
            return redirect('/');
        }
    }

}
