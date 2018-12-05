<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function login(){
        // $user = [
        //     'emailAddress' => $req->input('emailAddress'),
        //     'password' => $req->input('password')
        // ];        
        // if(!Auth::attempt($user)){      
        //     return redirect()->back()->with('errors', "Login Failed");
        // }           
        return redirect('/cloth');
    } 

    public function registerPage(){
        return view('register');
    }

    public function register(Request $req){
        $validate = Validator::make($req->all(),[
            'fullName' => 'required',
            'userEmail' => array('required','email','unique:users,email'),
            'password' => array('required',
                //'regex:/^[a-zA-Z-]+$/',
                'alpha_dash',
                'min:5',
                'confirmed'
            ),
            'userPhone' => array('required','digits_between:11,12'),
            'userGender' => array('required','in:Male,Female'),
            'userAddress' => array('required'),
            'userPfp' => array('image','max:5000')
        ],$message = [
            'regex' => ':attribute must be alphabets or dash only'
        ]);;

        $pos = strpos($req->userAddress, 'street');        

        if($validate->fails() || $pos === false){
            return redirect() ->back()->withErrors($validate);
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
            $newUser->save();
            return redirect('/loginPage');
        }
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
