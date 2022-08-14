<?php

namespace App\Http\Controllers\web;

use App\Models\FinancialFee;
use Illuminate\Http\Request;
use App\HelperClasses\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Payment;
use  Illuminate\Support\Facades\Validator;

class FinancialFeesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $financialfees = FinancialFee::get();
        return view('financialfees.index')->with('financialfees', $financialfees);
    }

    public function create()
    {
        return view('financialfee.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'first_name'=> 'required',
            'parent'=> 'redquired',
            'fees'=> 'redquired','double',
            'discount'=> 'redquired',
        ];
        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return redirect()->back()
            ->withErrors($validated)
            ->withInput();
        }
        $Financialfees_data = [];
        $student_id = DB::table('students')->where('first_name', $request->first_name)->where('last_name', $request->last_name)
        ->value('id');
        $parent_st_id = DB::table('students')->where('first_name', $request->first_name)->where('last_name', $request->last_name)
        ->pluck('parent_id');
        $parent_pa_id = DB::table('parents')->where('name', $request->parent)->pluck('id');

        foreach ($parent_st_id as $parent_id) {
            foreach ($parent_pa_id as $id) {
                if($parent_id == $id) {
                $Financialfees_data['parent_id'] = $parent_id;
                $Financialfees_data['student_id'] = $student_id;
                if($request->has('fees')) if(!is_null($request->fees)) $Financialfees_data['fees'] = $request->fees;
                if($request->has('discount')) if(!is_null($request->discount)) $Financialfees_data['discount'] = $request->discount;
                }
            }
        }
        $financialfees = FinancialFee::create($Financialfees_data);
        $students = Student::where('parent_id', $parent_id)->with('parent','grade','section','financialfees')->get();
        return view('student.show', compact('students'))->with('parent_id',$parent_id);
    }

    public function show($id)
    {
        $parent_id = DB::table('students')->where('id','=', $id)->value('parent_id');
        $payments = Payment::where('parent_id',$parent_id)->get();
        $financialfee = FinancialFee::where('student_id',$id)->with('student')->get();
        $total_payment = DB::table('payments')->where('parent_id','=', $parent_id)->sum('amount');
        return view('financialfee.show', compact('financialfee','payments', 'total_payment'));
    }

    public function edit($id)
    {
        $financialfees = FinancialFee::find($id);
        return view('financialfees.edit',compact('financialfees'));
    }
    
    public function update(Request $request, Financialfee $financialfees)
    {
        $rules = [
            'parent_id'=>'integer|required',
            'amount_received'=> 'double|required',
            'discount'=> 'double|required',
        ];

        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return response()->with($validated->errors());
        }
        $financialfees_data = [];
        if($request->has('parent_id')) if(!is_null($request->parent_id)) $financialfees_data['parent_id'] = $request->parent_id;
        if($request->has('amount_received')) if(!is_null($request->amount_received)) $financialfees_data['amount_received'] = $request->amount_received;
        if($request->has('discount')) if(!is_null($request->discount)) $financialfees_data['discount'] = $request->discount;

        $financialfees->update($financialfees_data);
    }

    public function destroy($id)
    {
        $financialfees = FinancialFee::find($id)->delete();
    }
}
