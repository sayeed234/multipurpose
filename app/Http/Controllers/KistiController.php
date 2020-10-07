<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Kisti;
use App\Member;
use DB;
use Session;
use DateTime;

class KistiController extends Controller
{
    public function kisti(){
        if(Session::has('email')){
  
        }else{
            return redirect('/admin-login')->with('mama','Please log in to access');
        }

        $current_date = new DateTime("now");
        $members=Member::orderBy('id','DESC')->get();

                $member=Member::orderBy('id','DESC')->get();

               // dd($member);
         $kisti=DB::table('kistis')
               ->join('members','members.id','=','kistis.member_id')
               ->select('kistis.*', 'members.memberno', 'members.name')
               ->where('kistis.date', $current_date->format("Y-m-d"))
               ->where('kistis.admin_id', Session::get('adminid'))
               ->orderBy('id', 'desc')
               ->get();  
                
           //dd($kisti);    
        return view('admin.kisti.kisti',compact('member','members','kisti'));
    }


    public function kisti_admin(){

        $kisti=DB::table('kistis')
                ->join('members','members.id','=','kistis.member_id')
                ->join('company_users','company_users.id','=','kistis.admin_id')
                ->select('kistis.*', 'members.memberno','members.image', 'members.name','company_users.first_name',)
                ->orderBy('id', 'desc')
                ->get(); 


        //dd($kisti);
            return view('admin.kisti.admin_kisti', compact('kisti'));
    }

    public function kisti_store(Request $request){
              $kisti=new Kisti();
              $kisti->admin_id=Session::get('adminid');
              $kisti->member_id=$request->member;
              $kisti->date=$request->date;
              $kisti->amount=$request->amount;
              $kisti->save();
              return redirect()->back()->with('add','dskffj');
    }

    public function kisti_edit($id){
        $kisti=Kisti::find($id);
        return $kisti;
    }
    public function kisti_update(Request $request){
        $kisti=Kisti::find($request->id);
        $kisti->member_id=$request->member;
        $kisti->date=$request->date;
        $kisti->amount=$request->amount;
        $kisti->save();
        return redirect()->back()->with('update','dskffj');
}
    public function kisti_delete($id){
        $kisti=Kisti::find($id);
        $kisti->delete();
    return redirect()->back()->with('delete','dskffj');
}
}
