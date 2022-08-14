<?php

namespace App\Http\Controllers\web;

use App\Models\FinancialFee;
use Illuminate\Http\Request;
use App\HelperClasses\Message;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use  Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    function create($id)
    {
        $student = Student::find($id);
        $parent_id = DB::table('students')->where('id', $id)->value('parent_id');
        $total_payment = DB::table('payments')->where('parent_id','=', $parent_id)->sum('amount');
        return view('payment.create', compact('student', 'total_payment'));
    }

    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $payment_data = [];
        $parent_id = DB::table('students')->where('id', $id)->value('parent_id');
        if($request->has('amount')) if(!is_null($request->amount)) $payment_data['amount'] = $request->amount;
        if($request->has('date')) if(!is_null($request->date)) $payment_data['date'] = $request->date;
       
        $payment_data['parent_id'] = $parent_id;
        $payment = Payment::create($payment_data);
        $payments = Payment::where('parent_id',$parent_id)->get();
        
        $financialfee = FinancialFee::where('student_id',$id)->with('student')->get();
        $parent_id = DB::table('students')->where('id','=', $id)->value('parent_id');
        $payments = Payment::where('parent_id',$parent_id)->get();
        
        $financialfee = FinancialFee::where('student_id',$id)->with('student')->get();
        $total_payment = DB::table('payments')->where('parent_id','=', $parent_id)->sum('amount');
       
        return view('financialfee.show', compact('financialfee','payments','total_payment'));
    }
}
