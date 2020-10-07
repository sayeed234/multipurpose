<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Expense;
use App\Loan;
use App\ShopOrder;
use App\company;
use DB;
use Session;

class AccountController extends Controller
{
    public function index(){
      if(Session::has('email')){

      }else{
          return redirect('/admin-login')->with('mama','Please log in to access');
      }
        $expense=Expense::all();
        return view('admin.Stock.dailyexpense',[
            'expense'=>$expense
        ]);
    }
    
    public function store(Request $request){
        $expense=new Expense();
        $expense->expense_type=$request->expense_type;
        $expense->purpose=$request->purpose;
        $expense->date=$request->date;
        $expense->total_amount=$request->total_amount;
        $expense->details=$request->details;     
        $expense->save();
        return redirect()->back()->with('add','Successfully');
     
     }
     
     public function edit($id){
       $data =Expense::find($id);
       return $data;
       
     }
     
     public function update(Request $request){
     
       $expense= Expense::find($request->id);
       $expense->expense_type=$request->expense_type;
       $expense->purpose=$request->purpose;
       $expense->date=$request->date;
       $expense->total_amount=$request->total_amount;
       $expense->details=$request->details;     
       $expense->save();
       return redirect()->back()->with('update','Successfully');   
     }

     public function delete($id){
       $expense=Expense::find($id);
       $expense->delete();
       return redirect()->back()->with('delete','Successfully');
     }

    public function loanindex(){
      if(Session::has('email')){

      }else{
          return redirect('/admin-login')->with('mama','Please log in to access');
      }
        $loan=Loan::all();
        return view('admin.Stock.loan',[
            'loan'=>$loan
        ]);
    }
    public function loanstore(Request $request){
        $loan=new Loan();
        $loan->loan_type=$request->loan_type;
        $loan->name=$request->name;
        $loan->date=$request->date;
        $loan->total_loan=$request->total_loan;
        $loan->interest=$request->interest;     
        $loan->withinterest=0;     
        $loan->save();
        return redirect()->back()->with('add','Successfully');
     
     }
     
     public function loanedit($id){
       $data =Loan::find($id);
       return $data;
       
     }
     
     public function loanupdate(Request $request){
     
       $loan= Loan::find($request->id);
       $loan->loan_type=$request->loan_type;
       $loan->name=$request->name;
       $loan->date=$request->date;
       $loan->total_loan=$request->total_loan;
       $loan->interest=$request->interest;     
       $loan->withinterest=0;     
       $loan->save();
       return redirect()->back()->with('update','Successfully');   
     }

     public function loandelete($id){
       $loan=Loan::find($id);
       $loan->delete();
       return redirect()->back()->with('delete','Successfully');
     }

     public function incomereport(Request $request){
      if(Session::has('email')){

      }else{
          return redirect('/admin-login')->with('mama','Please log in to access');
      }
      $company=company::all();
      $incomestate= DB::table('shop_orders')
                ->whereBetween('date', [$request->fromDate, $request->toDate])
                ->select(DB::raw('SUM(order_total) as total_sale'),  DB::raw('SUM(payment) as total_income'),
                     DB::raw('SUM(status) as total_due'))
                ->first();

               // dd($incomestate);

                return view('admin.Report.incomereport',[
                'incomestate'=>$incomestate,
                'company'=>$company
                ]);
     }

}
