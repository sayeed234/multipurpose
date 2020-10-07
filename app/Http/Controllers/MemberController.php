<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Session;

class MemberController extends Controller
{
    public function index(){
      if(Session::has('email')){
  
      }else{
          return redirect('/admin-login')->with('mama','Please log in to access');
      }
        $member=Member::orderBy('id','DESC')->get();
        return view('admin.member.member',[
            'member'=>$member
        ]);
    }

    public function memberstore(Request $request){
  
        $company_image=$request->file('image');
        $name=uniqid().$company_image->getClientOriginalName();
        $uploadPath='public/image/';
        $company_image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;
        $this->imginfo($request,$imageUrl);     
        return redirect()->back()->with('add','ddd');
      
      }
            
      protected  function imginfo( $request,$imageUrl){
                 
        $member=new Member();
        $member->dates=$request->date;
        $member->memberno=$request->memberno;
        $member->unitname=$request->unitname;
        $member->unitno=$request->unitno;
        $member->name=$request->name;
        $member->mobile=$request->mobile;
        $member->nid=$request->nid;
        $member->age=$request->age;
        $member->fhname=$request->fhname;
        $member->profession=$request->profession;
        $member->village=$request->village;
        $member->post=$request->post;
        $member->upazila=$request->upazila;
        $member->district=$request->district;
        $member->subname=$request->subname;
        $member->relation=$request->relation;
        $member->subvillage=$request->subvillage;
        $member->subpost=$request->subpost;
        $member->subupazila=$request->subupazila;
        $member->subdistrict=$request->subdistrict;
        $member->status=1;
        $member->image=$imageUrl;      
        $member->save();
      
      
      }

      public function memberedit($id){
             $data=Member::find($id);
             return $data;
      }

      public function memberupdate(Request $request) {
    
            
          
        $profileById = Member::find( $request->id);
        $image=$request->file('image');
      
        if ($image) {
    
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
          
        } else {
            $imageUrl = $profileById->image;
        }
         $this->imageExistStatus($request,$imageUrl);
         return redirect()->back()->with('update','ddd');
      
      
      }
      
      private function imageExistStatus($request,$imageUrl) {
      
        $member=Member::find( $request->id);
        $member->dates=$request->date;
        $member->memberno=$request->memberno;
        $member->unitname=$request->unitname;
        $member->unitno=$request->unitno;
        $member->name=$request->name;
        $member->mobile=$request->mobile;
        $member->nid=$request->nid;
        $member->age=$request->age;
        $member->fhname=$request->fhname;
        $member->profession=$request->profession;
        $member->village=$request->village;
        $member->post=$request->post;
        $member->upazila=$request->upazila;
        $member->district=$request->district;
        $member->subname=$request->subname;
        $member->relation=$request->relation;
        $member->subvillage=$request->subvillage;
        $member->subpost=$request->subpost;
        $member->subupazila=$request->subupazila;
        $member->subdistrict=$request->subdistrict;
        $member->status=1;
        $member->image=$imageUrl;      
        $member->save();
        
      }

      protected function memberdelete($id){
           
        $member=Member::find($id);
        $member->Delete();
        return redirect()->back()->with('delete','ddd');
      } 
      
      public function memberview($id){
        $details=Member::find($id);
        return view('admin.member.member_view',['details'=>$details]);
      }
}
