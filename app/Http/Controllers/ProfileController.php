<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Session;



class ProfileController extends Controller
{
    public function index(){
        if(Session::has('email')){
  
        }else{
            return redirect('/admin-login')->with('mama','Please log in to access');
        }
        $profile=Profile::all();
        return view('admin.mastersetup.profile',[
            'profile'=>$profile
        ]);
    }

    
    public function store(Request $request){
    
      $image=$request->file('image');
      $name=$image->getClientOriginalName();
      $uploadPath='public/image/';
      $image->move($uploadPath,$name);
      $imageUrl=$uploadPath.$name;
      $this->imginfo($request,$imageUrl);
    
      return redirect()->back();
    
    }
    
    
    protected  function imginfo( $request,$imageUrl){
    
            
      $profile=new Profile();
      $profile->name=$request->name;
      $profile->designation=$request->designation;
      $profile->mobile1=$request->mobile1;
      $profile->mobile2=$request->mobile2;
      $profile->address=$request->address;
      $profile->email=$request->email;
      $profile->description=$request->description;
      $profile->image=$imageUrl;  
      $profile->save();
      dd($profile);
 
    }
    
    public function edit($id){
    
      $data = Profile::find($id);
      return $data;
    
    }
    
    ///update company info
    public function update(Request $request) {
    
            
          
      $profileById = Profile::find( $request->id);
      $image=$request->file('image');
    
      if ($image) {
          //unlink($companyById->company_image);
          $name=$image->getClientOriginalName();
          $uploadPath='public/image/';
          $image->move($uploadPath,$name);
          $imageUrl=$uploadPath.$name;
        
      } else {
          $imageUrl = $profileById->image;
      }
       $this->imageExistStatus($request,$imageUrl);
       return redirect()->back()->with('update','kjkjkj');
    
     
      /*  echo $imageUrl;
      exit();*/
    
    }
    
    private function imageExistStatus($request,$imageUrl) {
    
      $profile=Profile::find( $request->id);
      $profile->name=$request->name;
      $profile->designation=$request->designation;
      $profile->mobile1=$request->mobile1;
      $profile->mobile2=$request->mobile2;
      $profile->address=$request->address;
      $profile->email=$request->email;
      $profile->description=$request->description;
      $profile->image=$imageUrl;  
      $profile->save();
    
    
    
      
    }
    
    
}
