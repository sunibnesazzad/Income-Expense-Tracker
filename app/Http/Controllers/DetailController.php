<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Balance;
use App\Detail;
use Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class DetailController extends Controller
{
    //showing detail page
    public function create(){
        return view('detail.detail');
    }

    public function store(Request $request){
        //validate the form
        $this->validate(request(),[
            'account' => 'required',
            'category' => 'required',
            'date' => 'required',
            'description' => 'required',
            'debitorcredit' => 'required',
            'incomeorexpense' => 'required',
        ]);
        //creating detail class object
        $details = new Detail();
        $details->user_id =auth()->id();
        $details->account = request('account');
        $details->category = request('category');
        $details->date = request('date');
        $details->description = request('description');
        $details->debitorcredit = request('debitorcredit');
        if($details->debitorcredit=="Debit"){
            $details->income = request('incomeorexpense');
        }else{
            $details->expense = request('incomeorexpense');
        }

        $user = User::find(auth()->id());
        /*return $user->balance->balance;*/
        if($details->debitorcredit=="Debit"){
            $details->totalbalance = $user->balance->balance + $details->income;
        }else{
            $details->totalbalance = $user->balance->balance - $details->expense;
        }
        //saving detail data in detail database
        $details->save();
        //updating balance database
        $data = array(
            'balance' => $details->totalbalance,
        );
        Balance::where('user_id',Auth::user()->id)->update($data);
        //showing Notifications
        $notification = [
            'message' => 'Data is added successful.!',
            'alert-type' => 'success'
        ];
       return redirect('/showdetail')->with($notification);

    }

    public function show(){

        $details = DB::table('details')->where('user_id', Auth::user()->id)->get();

        return view('detail.showDetail',compact('details'));
    }

    public function pdfview(Request $request)
    {
        set_time_limit(3000);
        $details = DB::table('details')->where('user_id', Auth::user()->id)->get();
        view()->share('details',$details);

        if($request->has('show')) {
            // pass view file
            $pdf = PDF::loadView('detail.showDetail');
            // show pdf
            return $pdf->stream('detail.showDetail.pdf');
        }
        if($request->has('download')) {
            // pass view file
            $pdf = PDF::loadView('detail.showDetail');
            // show pdf
            return $pdf->download('detail.showDetail.pdf');
        }
        return redirect('/detail');

    }

}
