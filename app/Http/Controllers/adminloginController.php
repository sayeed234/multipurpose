<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
use App\CompanyUser;
use App\Group;
use App\Category;
use App\Accounthead;
use App\company;
use Carbon\Carbon;
use App\verify_token;
use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;

class adminloginController extends Controller
{
    public function login_form(){
        return view('singin&singup.singin.login');
    }
 
    //admin login here
    public function login_form_action(Request $request){
                   

     // dd($request->all());
     {
         if($login_data=CompanyUser::where('email',$request->email)->where('user_status',1)->first()){

          //dd($login_data);
             if($login_data->email == $request->email && Hash::check($request->password,$login_data->password)){
                 Session::put('email',$login_data->email);
                 Session::put('adminname',$login_data->first_name);
                 Session::put('adminid',$login_data->id);
                 Session::put('adminrole',$login_data->user_role);
               return redirect('/admin-dashboard');
                 
             }
             else{
                return redirect('/admin-login')->with('status',' Successfully');
 
                 
             }
 
         }
         else{
          return redirect('/admin-login')->with('status',' Successfully');
 
 
         }
     
         }
 
    }
 
 
 ///Forget password reset Page
   public function admin_password_reset_page(){
     return view('singin&singup.forget.enter_email');
 
   }
 ///Forget password reset Code
   
   public function admin_password_reset(Request $request){
 
     $this->Validate($request, [
         'email' => 'required', 
           
    ]);
    if( $id=verify_token::where('email',$request->email)->first()){
     $id->delete();
    }
 
     
      
            $random= new verify_token();
      
   
      $random->email = $request->email;
      $token=rand(111111,999999);
      $random->token = $token;
      $random->save();
 
      Session::put('code',$token);    
       
      Session::put('e',$request->email);    
 
 
      $maildata=$request->toArray();
       Mail::send('singin&singup.forget.forget_email',$maildata,function($massage) use ($maildata)
       {
       $massage->to($maildata['email']); 
       $massage->subject('Test Email'); 
 
       });
      return redirect('/admin-reset-code')->with('check',' Check Email ');
     //return 'email success';
 
 
 
   }
 
 
   public function admin_reset_code(){
     return view('singin&singup.forget.verify_code');
 
   }
   public function admin_reset_verify_code(Request $request){
       
     if($request->token==Session('code')){
 
         return redirect('/admin-update-password');
     }
     else{
         return "erorr";
     }
   }
   public function admin_update_password_page(){
 
     return view('singin&singup.forget.update_pass');
 
   }
   public function admin_update_password(Request $request){
     $this->Validate($request, [
         'email' => 'required', 
           
    ]);
 
     $update_pass=User::where('email',Session('e'))->first();
      
     $update_pass->password=bcrypt($request->password);
     $update_pass->save();
     session()->forget('e');
     
     return  redirect('/admin-login')->with('successmessage','Password Successfully Update');
     //return "sucess";
     
 
   }
 

 
   public function logout(){
                 
 
     session()->forget('email');
    session()->forget('adminname');
    session()->forget('adminid');
    session()->forget('adminrole');


     return redirect('/admin-login');
 
 }
}
