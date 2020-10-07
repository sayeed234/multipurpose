<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\company;
use Carbon\Carbon;
use App\verify_token;
use Session;
use DB;
use DateTime;
use App\Collection;
use App\kisti;
use App\Loan;
use App\Member;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

      public function home(){

      
          if(Session::has('email')){

        }else{
            return redirect('/admin-login')->with('mama','Please log in to access');
        }
      
        $nowdate = new DateTime("now");

        $total_collection=DB::table('collections')
                ->select(DB::raw('SUM(amount) as total'))
                 ->first();
         $today_collection=DB::table('collections')
                  ->where('date', $nowdate->format("Y-m-d"))
                  ->select(DB::raw('SUM(amount) as total'))
                  ->first();
//dd($today_collection);


        $total_kisti=DB::table('kistis')
                 ->select(DB::raw('SUM(amount) as total'))
                  ->first();
        $today_kisti=DB::table('kistis')
                  ->select(DB::raw('SUM(amount) as total'))
                  ->where('date', $nowdate->format("Y-m-d"))
                   ->first();




        $total_loan=DB::table('loans')
                  ->select(DB::raw('SUM(total) as total'))
                   ->first();
                   
        $today_loan=DB::table('loans')
               ->where('date', $nowdate->format("Y-m-d"))
             ->select(DB::raw('SUM(total) as total'))
             ->first();





         $total_fee=DB::table('loans')
                   ->select(DB::raw('SUM(status) as total'))
                    ->first();

        $today_fee=DB::table('loans')
                  ->where('date', $nowdate->format("Y-m-d"))
                    ->select(DB::raw('SUM(status) as total'))
                     ->first();
// dd($total_collection);

       $topcollection=DB::table('collections')
                   ->leftJoin('members','members.id','=','collections.collection_member')
                   ->select('members.memberno','members.name',DB::raw('SUM(amount) as total'))
                   ->groupBy('members.memberno','members.name')
                   ->orderBy('total','desc')
                   ->limit(6)
                   ->get();

    $topkisti=DB::table('kistis')
                   ->leftJoin('members','members.id','=','kistis.member_id')
                   ->select('members.memberno','members.name',DB::raw('SUM(amount) as total'))
                   ->groupBy('members.memberno','members.name')
                   ->orderBy('total','desc')
                   ->limit(6)
                   ->get();

                  // dd($topkisti);
       return view('admin.home.home_content',compact('total_collection',
       'total_kisti','total_loan','total_fee','today_collection',
       'today_kisti','today_loan','today_fee','topcollection','topkisti'
    ));
   }

   public function index(){
    
    return view('index');
}

 

}
