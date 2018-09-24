<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Balance;
use App\Detail;
use Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use App;

class DetailController extends Controller
{
    //showing detail page
    public function create(){
        $user = Auth::user();
        return view('detail.add',compact('user'))->with('title','Add Details');
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
        $user = Auth::user();
        $details = DB::table('details')->where('user_id', Auth::user()->id)->get();
        /*return $details;*/
        return view('detail.index',compact('details','user'))->with('title','All Details');
    }

    public function pdfview(Request $request)
    {
        set_time_limit(3000);
        $details = DB::table('details')->where('user_id', Auth::user()->id)->get();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('detail.showDetail', $details);
        return $pdf->stream();


    }

    public function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_detail_data_to_html());
        return $pdf->stream();
    }
    public function showdata(){
        $details = DB::table('details')->where('user_id', Auth::user()->id)->get();
        return $details;
    }

    public function convert_detail_data_to_html(){
        $user = Auth::user();
        $details = $this->showdata();
        $output = '
     <h3 align="center">'.$user->name.' Income & Expense History</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="12.5%">Account</th>
    <th style="border: 1px solid; padding:12px;" width="12.5%">Date</th>
    <th style="border: 1px solid; padding:12px;" width="12.5%">Description</th>
    <th style="border: 1px solid; padding:12px;" width="12.5%">Category</th>
    <th style="border: 1px solid; padding:12px;" width="12.5%">Income Money IN</th>
    <th style="border: 1px solid; padding:12px;" width="12.5%">Expense Money Out</th>
    <th style="border: 1px solid; padding:12px;" width="12.5%">Debit/Credit</th>
    <th style="border: 1px solid; padding:12px;" width="12.5%">Overall Balance</th>
   </tr>
     ';
        foreach($details as $detail)
        {
            $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$detail->account.'</td>
       <td style="border: 1px solid; padding:12px;">'.$detail->date.'</td>
       <td style="border: 1px solid; padding:12px;">'.$detail->description.'</td>
       <td style="border: 1px solid; padding:12px;">'.$detail->category.'</td>
       <td style="border: 1px solid; padding:12px;">'.$detail->income.'</td>
        <td style="border: 1px solid; padding:12px;">'.$detail->expense.'</td>
       <td style="border: 1px solid; padding:12px;">'.$detail->debitorcredit.'</td>
       <td style="border: 1px solid; padding:12px;">'.$detail->totalbalance.'</td>
      </tr>
      ';
        }
        $output .= '</table>';
        return $output;
    }

}
