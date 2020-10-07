<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\company;
use App\Member;
use DB;
use Session;


class ReportController extends Controller
{    
    public function salesreportsales(Request $request){
        if(Session::has('email')){

        }else{
            return redirect('/admin-login')->with('mama','Please log in to access');
        }
        $company=company::all();
        $salesbydate= DB::table('shop_orderdetails')
                 ->join('products','products.id','=','shop_orderdetails.product_id')
                 ->whereBetween('d_date', [$request->fromDate, $request->toDate])
                 ->select('shop_orderdetails.product_id','products.name',DB::raw('SUM(product_qty) as total_qty'),   DB::raw('SUM(total) as total_sale'))
                  ->groupBy('product_id','name')
                  ->orderBy('total_qty', 'DESC')
                   ->get();

                 //dd($salesbydate);
                 return view('admin.Report.salesreport',[
                     'salesbydate'=>$salesbydate,
                     'company'=>$company
                 ]);
             }


             public function expensereport(Request $request){
                if(Session::has('email')){

                }else{
                    return redirect('/admin-login')->with('mama','Please log in to access');
                }
                $company=company::all();
                $expense= DB::table('expenses')
                         ->whereBetween('date', [$request->fromDate, $request->toDate])
                         ->select(DB::raw('SUM(total_amount) as total_expense'))
                           ->first();
        
                         //dd($salesbydate);
                         return view('admin.Report.expensereport',[
                             'expense'=>$expense,
                             'company'=>$company
                         ]);
                     }
//Collection Report.................................................................................
         public function collection(Request $request){
              $company=Company::all();
              $admin=DB::table('company_users')->where('user_role', 2)->get();

                   if($request->admin==01){
                    $incomestate= DB::table('collections')
                            ->whereBetween('date', [$request->fromDate, $request->toDate])
                            ->select(DB::raw('SUM(amount) as total'))
                            ->first();
                   }else{
                   $incomestate= DB::table('collections')
                            ->whereBetween('date', [$request->fromDate, $request->toDate])
                            ->where('collections.admin_id',$request->admin)
                            ->select(DB::raw('SUM(amount) as total'))
                            ->first();
                   }
              return view('admin.Report.collection',compact('company','admin','incomestate'));
                
         }  
//Kisti Report.................................................................................
        public function kisti_collection(Request $request){
            if(Session::has('email')){
  
            }else{
                return redirect('/admin-login')->with('mama','Please log in to access');
            }
            $company=Company::all();
            $admin=DB::table('company_users')->where('user_role', 2)->get();

                 if($request->admin==01){
                  $incomestate= DB::table('kistis')
                          ->whereBetween('date', [$request->fromDate, $request->toDate])
                          ->select(DB::raw('SUM(amount) as total'))
                          ->first();
                 }else{
                 $incomestate= DB::table('kistis')
                          ->whereBetween('date', [$request->fromDate, $request->toDate])
                          ->where('kistis.admin_id',$request->admin)
                          ->select(DB::raw('SUM(amount) as total'))
                          ->first();
                 }

                
            return view('admin.Report.kisti_collection',compact('company','admin','incomestate'));
              
       }              
//Member Collection Report..........................................................
public function member_collection(Request $request){
    if(Session::has('email')){
  
    }else{
        return redirect('/admin-login')->with('mama','Please log in to access');
    }
    $company=Company::all();
    $member=DB::table('members')->where('status', 1)->get();
//dd($member);
         if($request->member==01){
          return redirect()->back()->with('war','jsdnjnd');
         }else{
         $state= DB::table('collections')
                  ->whereBetween('date', [$request->fromDate, $request->toDate])
                  ->where('collections.collection_member',$request->member)
                  ->get();
             
            Session::put('member',$request->member);
         //dd($state);
         }

          
    return view('admin.Report.member_collection',compact('company','member','state'));
      
}

//member Invoice Statement.......................
          public function member_collection_invoice($id){

            $company=Company::all();
            $member=Member::find($id);
            $result=DB::table('collections')
                  ->where('collections.collection_member',$id)
                  ->orderBy('collections.date','asc')
                  ->get();

                // dd($result);

                 return view('admin.Report.member_collect_ivoice',compact('result','company','member'));
          }

//Member Collection Report..........................................................
        public function member_kisti(Request $request){
            if(Session::has('email')){
  
            }else{
                return redirect('/admin-login')->with('mama','Please log in to access');
            }
            $company=Company::all();
            $members=Member::all();
        //dd($member);
                if($request->members==01){
                return redirect()->back()->with('war','jsdnjnd');
                }else{
                $states= DB::table('kistis')
                        ->whereBetween('date',[$request->fromDate, $request->toDate])
                        ->where('kistis.member_id',$request->members)
                        ->get();
                    
                    Session::put('memberss',$request->members);
               // dd($states);
                }

          
    return view('admin.Report.member_kisti',compact('company','members','states'));
      
}
//Kisti Invoice..................................................
  public function member_kisti_invoice($id){

    $company=Company::all();
    $member=Member::find($id);
    $result=DB::table('kistis')
          ->where('kistis.member_id',$id)
          ->orderBy('kistis.date','asc')
          ->get();

        // dd($result);

         return view('admin.Report.member_kisti_invoice',compact('result','company','member'));
  }



     //Monthly Report.......................................................

public function report_show(){
    if(Session::has('email')){
  
    }else{
        return redirect('/admin-login')->with('mama','Please log in to access');
    }
    $company=Company::all();
    return view('admin.Report.month_report',compact('company'));
}

     public function monthly_report(Request $request){


        if($request->sayeed==1){
            $month= DB::table('collections')
                    -> join('members','members.id','=','collections.collection_member')
                    ->whereBetween('date', [$request->fromDate, $request->toDate])
                    ->select('collections.collection_member','members.name','members.memberno','members.post','members.village','members.upazila',DB::raw('SUM(amount) as total'))
                    ->groupBy('collection_member','members.name','members.memberno','members.post','members.village','members.upazila')
                    ->orderBy('total', 'DESC')
                    ->get();

                   // dd($month);

        }else{
            $month= DB::table('kistis')
                    -> join('members','members.id','=','kistis.member_id')
                    ->whereBetween('date', [$request->fromDate, $request->toDate])
                    ->select('kistis.member_id','members.name','members.memberno','members.post','members.village','members.upazila',DB::raw('SUM(amount) as total'))
                    ->groupBy('member_id','members.name','members.memberno','members.post','members.village','members.upazila')
                    ->orderBy('total', 'DESC')
                    ->get();
        }
    
           $company=Company::all();
            return view('admin.Report.month_collection_invoice',compact('month','company'));
         
    }

    public function close(){
        $company=Company::all();
        $member=Member::all();
        //dd($member);
        return view('admin.Report.close',compact('company','member'));
    }
    public function close_report(Request $request){

        $company=Company::all();
        $member=Member::find($request->member);

        $collection=DB::table('collections')
                   ->where('collections.collection_member',$request->member)
                   ->select('collections.collection_member',DB::raw('SUM(amount) as total'))
                   ->groupBy('collections.collection_member')
                   ->first();
       $kisti=DB::table('kistis')
                   ->where('kistis.member_id',$request->member)
                   ->select('kistis.member_id',DB::raw('SUM(amount) as total'))
                   ->groupBy('kistis.member_id')
                   ->first();
       $msp=DB::table('msps')
                   ->where('msps.member',$request->member)
                   ->select('msps.member',DB::raw('SUM(tk) as total'))
                   ->groupBy('msps.member')
                   ->first();
       $share=DB::table('shares')
                   ->where('shares.member_id',$request->member)
                   ->select('shares.member_id',DB::raw('SUM(balance) as total'))
                   ->groupBy('shares.member_id')
                   ->first();  
       $loan=DB::table('loans')
                   ->where('loans.member',$request->member)
                   ->select('loans.member',DB::raw('SUM(total) as total'))
                   ->groupBy('loans.member')
                   ->first();     
       // dd($kisti);
        return view('admin.Report.close_invoice',compact('company','member','collection','kisti','msp','share','loan'));
    }

    public function summary(){
        $company=Company::all();
        $data=Member::orderBy('id','DESC')->get();
        return view('admin.Report.summary',compact('company','data'));
    }






}
