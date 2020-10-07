<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\CompanyUser;
use App\Collection;
use App\Company;
use App\Loan;
use App\Msp;
use App\Share;
use Session;
use DB;

class LoanController extends Controller
{
    public function index(){
        if(Session::has('email')){
  
        }else{
            return redirect('/admin-login')->with('mama','Please log in to access');
        }

        $list=Member::orderBy('memberno','desc')->get();
        $lists=Member::orderBy('memberno','desc')->get();
     
        $loan=DB::table('loans')
              ->join('members', 'members.id', '=', 'loans.member')
              ->select('loans.*', 'members.name', 'members.memberno')
              ->orderBy('id', 'desc')
              ->get();
              //dd($loan);
         return view('admin.Loan.loan',[
             'list'=>$list,
             'lists'=>$lists,
             'loan'=>$loan
             ]);
    }

    public function store(Request $request){
              
        if($request->others==1){
            $loan=new Loan();
            $loan->admin=Session::get('adminid');
            $loan->member=$request->collection_member;
            $loan->date=$request->date;
            $loan->amount=$request->amount;
            $loan->from_free=$request->form;
            $loan->admit=$request->admit;
            $loan->msp=$request->msp;
            $loan->type=1;
            $loan->loanper=$request->loan;
            $loan->shareper=$request->share;
            $loan->processper=$request->process;
            $loan->proces=(($request->amount *$request->process)/100) ;
            $loan->share=(($request->amount *$request->share)/100);
            $loan->book=$request->book;
            $loan->total=$request->amount+(($request->amount *$request->loan)/100);
            $loan->profit=(($request->amount *$request->loan)/100);
            $loan->status=($request->form+$request->admit+$request->msp+(($request->amount *$request->process)/100)+(($request->amount *$request->share)/100)
            +$request->book);
            $loan->save();
        }else{
            $loan=new Loan();
            $loan->admin=Session::get('adminid');
            $loan->member=$request->collection_member;
            $loan->date=$request->date;
            $loan->amount=$request->amount;
            $loan->from_free=$request->form;
            $loan->admit=$request->admit;
            $loan->msp=$request->msp;
            $loan->proces=(($request->amount *$request->process)/100) ;
            $loan->share=(($request->amount *$request->share)/100);
            $loan->book=$request->book;
            $loan->type=2;
            $loan->loanper=$request->loan;
            $loan->shareper=$request->share;
            $loan->processper=$request->process;
            $loan->total=(($request->amount)+($request->form+$request->admit+$request->msp+(($request->amount *$request->process)/100)+(($request->amount *$request->share)/100)+(($request->amount *$request->loan)/100)
            +$request->book));
            $loan->profit=(($request->amount *$request->loan)/100);
            $loan->status=($request->form+$request->admit+$request->msp+(($request->amount *$request->process)/100)+(($request->amount *$request->share)/100)+$request->book);

            $loan->save();

        }
          
         $collection= new Collection();
         $collection->admin_id=Session::get('adminid');
         $collection->collection_member=$request->collection_member;
         $collection->date=$request->date;
         $collection->amount=(($request->amount *$request->loan)/100);
         $collection->loan_id=$loan->id;
         $collection->save();
        
        $share=new Share();
        $share->admin_id=Session::get('adminid');
        $share->member_id=$request->collection_member;
        $share->date=$request->date;
        $share->balance=(($request->amount *$request->share)/100);
        $share->loan_id=$loan->id;
        $share->save();

        $msp=new Msp();
        $msp->admin=Session::get('adminid');
        $msp->member=$request->collection_member;
        $msp->date=$request->date;
        $msp->tk=$request->msp;
        $msp->loan_id=$loan->id;
        $msp->save();

     return redirect()->back()->with('add','ksndjihdf'); 

    }

    public function delete($id){
        $data=Loan::find($id);
        $data->delete();
        return redirect()->back()->with('delete','ksndjihdf'); 

    }
    public function edit($id){
        $data=Loan::find($id);
       return $data;

    }
    public function update(Request $request){
              
        if($request->others==1){
            $loan=Loan::find($request->id);
            $loan->admin=Session::get('adminid');
            $loan->member=$request->collection_member;
            $loan->date=$request->date;
            $loan->amount=$request->amount;
            $loan->from_free=$request->form;
            $loan->admit=$request->admit;
            $loan->msp=$request->msp;
            $loan->type=1;
            $loan->loanper=$request->loan;
            $loan->shareper=$request->share;
            $loan->processper=$request->process;
            $loan->proces=(($request->amount *$request->process)/100) ;
            $loan->share=(($request->amount *$request->share)/100);
            $loan->book=$request->book;
            $loan->total=$request->amount+(($request->amount *$request->loan)/100);
            $loan->profit=(($request->amount *$request->loan)/100);
            $loan->status=($request->form+$request->admit+$request->msp+(($request->amount *$request->process)/100)+(($request->amount *$request->share)/100)
            +$request->book);
            $loan->save();
        }else{
            $loan=Loan::find($request->id);
            $loan->admin=Session::get('adminid');
            $loan->member=$request->collection_member;
            $loan->date=$request->date;
            $loan->amount=$request->amount;
            $loan->from_free=$request->form;
            $loan->admit=$request->admit;
            $loan->msp=$request->msp;
            $loan->proces=(($request->amount *$request->process)/100) ;
            $loan->share=(($request->amount *$request->share)/100);
            $loan->book=$request->book;
            $loan->type=2;
            $loan->loanper=$request->loan;
            $loan->shareper=$request->share;
            $loan->processper=$request->process;
            $loan->total=(($request->amount)+($request->form+$request->admit+$request->msp+(($request->amount *$request->process)/100)+(($request->amount *$request->share)/100)+(($request->amount *$request->loan)/100)
            +$request->book));
            $loan->profit=(($request->amount *$request->loan)/100);
            $loan->status=($request->form+$request->admit+$request->msp+(($request->amount *$request->process)/100)+(($request->amount *$request->share)/100)+$request->book);
            $loan->save();

        }
          
        $collect=DB::table('collections')
                   ->where('collections.loan_id',$request->id)
                   ->first();
        $collection=Collection::find($collect->id);
        $collection->admin_id=Session::get('adminid');
        $collection->collection_member=$request->collection_member;
        $collection->date=$request->date;
        $collection->amount=(($request->amount *$request->loan)/100);
        $collection->loan_id=$loan->id;
        $collection->save(); 

        $collects=DB::table('shares')
                 ->where('shares.loan_id',$request->id)
                 ->first();
        $share=Share::find($collects->id);
        $share->admin_id=Session::get('adminid');
        $share->member_id=$request->collection_member;
        $share->date=$request->date;
        $share->balance=(($request->amount *$request->share)/100);
        $share->save();

     return redirect()->back()->with('update','ksndjihdf'); 

    }
    public function view($id){

        $loan=Loan::find($id);
        $details=Member::find($loan->member);
        $admin=CompanyUser::find($loan->admin);
        //dd($member);
        return view('admin.Loan.loan_view',compact('loan','details','admin'));
    }

    public function invoice($id){
           
          $company=Company::all();
          $loan=Loan::find($id);
          $member=Member::find($loan->member);
          return view('admin.Loan.loan_invoice',compact('loan','member','company'));
    }


//share...................................................................................
public function share(){
    if(Session::has('email')){
  
    }else{
        return redirect('/admin-login')->with('mama','Please log in to access');
    }
    $list=Member::orderBy('memberno','desc')->get();
    $lists=Member::orderBy('memberno','desc')->get();
    $share=DB::table('shares')
              ->join('members', 'members.id', '=', 'shares.member_id')
               ->select('shares.*', 'members.name', 'members.memberno')
               ->get();
              // dd($share);
    return view('admin.Loan.share',compact('list','lists','share'));
}
  public function share_store(Request $request){
                $share=new Share();
                $share->admin_id=Session::get('adminid');
                $share->member_id=$request->collection_member;
                $share->date=$request->date;
                $share->balance=$request->amount;
                $share->save();
                return redirect()->back()->with('add','dskffj');
  }
  protected function share_edit($id){
                $data=Share::find($id);
                return $data;
  }
  public function share_update(Request $request){
            $share=Share::find($request->id);
            $share->admin_id=Session::get('adminid');
            $share->member_id=$request->collection_member;
            $share->date=$request->date;
            $share->balance=$request->amount;
            $share->save();
            return redirect()->back()->with('update','dskffj');
  }
  protected function share_delete($id){
            $data=Share::find($id);
            $data->delete();
            return redirect()->back()->with('delete','dskffj');

}

//MSP...............................................................................
public function msp(){
    if(Session::has('email')){
  
    }else{
        return redirect('/admin-login')->with('mama','Please log in to access');
    }
    $list=Member::orderBy('memberno','desc')->get();
    $lists=Member::orderBy('memberno','desc')->get();
    $msp=DB::table('msps')
              ->join('members', 'members.id', '=', 'msps.member')
               ->select('msps.*', 'members.name', 'members.memberno')
               ->get();
              // dd($share);
    return view('admin.Loan.msp',compact('list','lists','msp'));
}
  public function msp_store(Request $request){
                $msp=new Msp();
                $msp->admin=Session::get('adminid');
                $msp->member=$request->collection_member;
                $msp->date=$request->date;
                $msp->tk=$request->amount;
                $msp->save();
                return redirect()->back()->with('add','dskffj');
  }
  protected function msp_edit($id){
                $data=Msp::find($id);
                return $data;
  }
  public function msp_update(Request $request){
            $msp=Msp::find($request->id);
            $msp->admin=Session::get('adminid');
            $msp->member=$request->collection_member;
            $msp->date=$request->date;
            $msp->tk=$request->amount;
            $msp->save();
            return redirect()->back()->with('update','dskffj');
  }
  protected function msp_delete($id){
            $data=Msp::find($id);
            $data->delete();
            return redirect()->back()->with('delete','dskffj');

}

}
