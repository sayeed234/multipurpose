<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\company;
use App\Group;
use App\Category;
use App\Accounthead;
use Carbon\Carbon;
use App\verify_token;
use App\CompanyUser;

use Mail;
use Hash;
use Validator;
use Redirect;
use Session;
use DB;
use Socialite;

class mastersetupController extends Controller
{
    
public function company_details(){
  if(Session::has('email')){

  }else{
      return redirect('/admin-login')->with('mama','Please log in to access');
  }
    $companydetails=company::all();
      return view('admin.mastersetup.company',['companydetails'=>$companydetails]);
      
  }
  
  
  public function companyAdd(Request $request){
  
    $company_image=$request->file('company_image');
    $name=$company_image->getClientOriginalName();
    $uploadPath='public/image/';
    $company_image->move($uploadPath,$name);
    $imageUrl=$uploadPath.$name;
    $this->imginfo($request,$imageUrl);
  
    return redirect()->back();
  
  }
  
  
  protected  function imginfo( $request,$imageUrl){
  
          
    $company=new company();
    $company->company_name=$request->company_name;
    $company->company_mobile1=$request->company_mobile1;
    $company->company_mobile2=$request->company_mobile2;
    $company->company_mobile3=$request->company_mobile3;
    $company->company_email=$request->company_email;
    $company->company_website=$request->company_website;
    $company->company_address=$request->company_address;
    $company->country=$request->country;
    $company->company_image=$imageUrl;
  
    $company->save();
  
  
  }
  
  public function compviewbyid($id){
  
    $data = company::find($id);
    return $data;
  
  }
  
  ///update company info
  public function companyupdate(Request $request) {
      
    $companyById = company::find( $request->id);
    $company_image=$request->file('company_image');
  
    if ($company_image) {
        //unlink($companyById->company_image);
        $name=$company_image->getClientOriginalName();
        $uploadPath='public/image/';
        $company_image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;
      
    } else {
        $imageUrl = $companyById->company_image;
    }
     $this->imageExistStatus($request,$imageUrl);
     return redirect()->back();
  
   
    /*  echo $imageUrl;
    exit();*/
  
  }
  
  private function imageExistStatus($request,$imageUrl) {
  
    $company=company::find( $request->id);
    $company->company_name=$request->company_name;
    $company->company_mobile1=$request->company_mobile1;
    $company->company_mobile2=$request->company_mobile2;
    $company->company_mobile3=$request->company_mobile3;
    $company->company_email=$request->company_email;
    $company->company_website=$request->company_website;
    $company->company_address=$request->company_address;
    $company->company_image=$imageUrl;
  
    $company->save();
  
  
  
    
  }
  
  
  ///update compay info
  
  
  
  
  public function companydelete($id){
    $userdelete=company::find($id);
          $userdelete->delete();
      return redirect()->back();
  
  
  }
  
  ///user
  public function user_details(){
    if(Session::has('email')){

    }else{
        return redirect('/admin-login')->with('mama','Please log in to access');
    }
   // $userdetails=CompanyUser::all();
    $userdetails=CompanyUser::orderby('created_at','desc')->get();
   // print_r($branchdetails);
      //return view('admin.mastersetup.branch',['branchdetails'=>$branchdetails]);
      return view('admin.mastersetup.user',['userdetails'=>$userdetails]);
  }
  public function user_add(Request $request){
    $company_user=new CompanyUser();
    $company_user->first_name=$request->first_name;
    $company_user->last_name=$request->last_name;
    $company_user->email=$request->email;
    $company_user->user_mobile=$request->user_mobile;
    $company_user->password=bcrypt($request->user_password);
    $company_user->user_role=$request->user_role;
    $company_user->user_status=1;
    $company_user->save();
  
    
  
    return redirect()->back()->with('add','kjkjkj');
  }
  public function user_edit($id){
    $data = CompanyUser::find($id);
    return $data;
  }
  public function user_delete($id){
    $userdelete=CompanyUser::find($id);
    $userdelete->delete();
    return redirect()->back()->with('delete','kjkjkj');
  }
  public function user_update(Request $request){
    $company_user= CompanyUser::find($request->id);  
    $company_user->first_name=$request->first_name;
    $company_user->last_name=$request->last_name;
    $company_user->email=$request->email;
    $company_user->user_mobile=$request->user_mobile;
    $company_user->user_role=$request->user_role;
    $company_user->save();
    return redirect()->back()->with('update','kjkjkj');
   
  }
  public function status($id){
    $user_status=CompanyUser::find($id);
    if ($user_status->user_status==1) {
      $user_status->user_status=0;
      $user_status->save();
      return redirect()->back();
    }else if($user_status->user_status==0){
      $user_status->user_status=1;
      $user_status->save();
      return redirect()->back();
    }
  }
   
  
   
}
