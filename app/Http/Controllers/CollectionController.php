<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Member;
use App\Collection;
use Session;
use DateTime;

class CollectionController extends Controller
{
    public function collection(){
        if(Session::has('email')){
  
        }else{
            return redirect('/admin-login')->with('mama','Please log in to access');
        }

       $list=Member::orderBy('memberno','desc')->get();
       $lists=Member::orderBy('memberno','desc')->get();
       $current_date = new DateTime("now");

       $collection = DB::table('collections')
            ->join('members', 'members.id', '=', 'collections.collection_member')
            ->select('collections.*', 'members.memberno', 'members.name')
            ->where('collections.date', $current_date->format("Y-m-d"))
            ->where('collections.admin_id', Session::get('adminid'))
            ->orderBy('id', 'desc')
            ->get();

//dd($collection);
        return view('admin.collection.collection',[
            'list'=>$list,
            'lists'=>$lists,
            'collection'=>$collection
            ]);
    }
public function collection_admin(){
    $collection = DB::table('collections')
            ->join('members', 'members.id', '=', 'collections.collection_member')
            ->join('company_users', 'company_users.id', '=', 'collections.admin_id')
            ->select('collections.*', 'members.memberno', 'members.name','members.image','company_users.first_name')
            ->orderBy('id', 'desc')
            ->get();
   //dd( $collection);
      return view('admin.collection.admin_collection',compact('collection'));      
}



    public function collection_store(Request $request){

             $collection=new Collection();
             $collection->admin_id=Session::get('adminid');
             $collection->collection_member=$request->collection_member;
             $collection->date=$request->date;
             $collection->amount=$request->amount;
             $collection->save();

             return redirect()->back()->with('add','smdfkjdf');
    }

    public function collection_edit($id){
        $data=Collection::find($id);
        return $data;
    }

    public function collection_update(Request $request){

        $collection= Collection::find($request->id);
        $collection->admin_id=Session::get('adminid');
        $collection->collection_member=$request->collection_member;
        $collection->date=$request->date;
        $collection->amount=$request->amount;
        $collection->save();

        return redirect()->back()->with('update','dskffj');
}
public function collection_delete($id){
    $data=Collection::find($id);
    $data->delete();
    return redirect()->back()->with('delete','smdfkjdf');
}


}

