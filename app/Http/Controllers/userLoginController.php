<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyUser;
use Hash;
use Session;

class userLoginController extends Controller
{
   public function user_login(){
       return view('user.singin&singup.singin.login');
   }

   public function user_login_action(Request $request){
      
      if($login_data=CompanyUser::where('email',$request->user_email)->first()){
         if($login_data->email == $request->user_email && Hash::check($request->user_password,$login_data->user_password)){
             Session::put('email',$login_data->email);

            // return "sucess";
             return redirect('/admin-dashboard');
   
         }
         else{
             return "Login Error";

             
         }

     }
     else{
         return "Email problem";


     }
   }

   public function userhome(){
       return view('user.dashboard.home.home_content');
   }
}