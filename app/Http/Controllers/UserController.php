<?php

namespace App\Http\Controllers;
use App\Models\Type;
use Validator;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login()
    {
        return view ('users.login');
    }
    function reg()
    {
        return view ('users.reg');
    }
    function welcome()
    {
        return view ('users.welcome');
    }
    function ud(Request $req)
    {
        $users = Type::all();
       
        return view('users.userdashboard')
                ->with('users',$users);
        

    }
    function ad()
    {
        $users = Type::all();
       
        return view('users.admindashboard')
                ->with('users',$users);
    }
    function details()
    {

    }
    function regSubmit(Request $req)
    {
        @$this->validate($req,
                        [
                            "name"=>"required|max:20|regex:/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/",
                            "email"=>"required|regex:/^([1-9]{2}-[0-9]{5}-[1-3]{1})\@student\.aiub\.edu+$/",
                            "password"=>"required|min:8|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",
                            "conf_password"=>"required|same:password",
                            "type"=>"required"
                
                        ],
                        [
                            "name.required"=> "Please Enter Your Name",
                            "name.max"=> "Maximum 20 Characters",
                            "name.regex"=>"Please Enter A Valid Name",
                            "email.required"=>"Please Enter Your Email Address",
                            "email.regex"=>"Please Enter A Valid Email Address",
                            "password.required"=>"Please Enter A Password",
                            "password.min"=>"Minimum 8 Characters",
                            "password.regex"=>"password must contain a special character, a number and an uppercase letter",
                            "conf_password.required"=>"Please Confirm Your Password",
                            "conf_password.same"=>"Password do not match",
                            "type.required"=>"Please Enter User Type"
                        ]
                        );
                        
                        $u1 = new Type();
                        $u1->name = $req->name;
                        $u1->email = $req->email;
                        $u1->password = $req->password;
                        $u1->type = $req->type;
                        $u1->save();
                        return redirect('users.login');
    }
    function loginSubmit(Request $req)
    {
        $this->validate($req,
                        [
                            "email"=>"required",
                            "password"=>"required"
                        ]
                        );
        $user_data = array(
                            'email'  => $req->get('email'),
                            'password' => $req->get('password'),
                            'type'=>$req->get('type')
                           );
                           if(Auth::attempt($user_data))
                           {
                               if($req->get('type')==='user')
                               {
                                   return redirect('users.userdashboard');
                               }
                               else{
                                   return redirect('users.admindashboard');
                               }
                            
                           }
                           else
                           {
                            return back()->with('error', 'Wrong Login Details');
                           }
    }
}
