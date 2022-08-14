<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FinancialFee;
use App\Models\FinancialFees;
use App\Models\Parents;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class FinancialFeesController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_parent($parent_id)
    {

        $parent=DB::table('parents')
            ->select('name')
            ->where('id', '=', $parent_id)
            ->get();
        $fees=FinancialFee::where('parent_id',$parent_id)->get();

        return [
          'Parent' =>  json_decode($parent),
           'Fees' =>  json_decode($fees),
        ];
    }


    public function show_student($student_id)
    {

        $student=DB::table('students')
            ->select('first_name','last_name')
            ->where('id', '=', $student_id)
            ->get();
        $fees=FinancialFee::where('student_id',$student_id)->get();

        return [
            'Student' =>  json_decode($student),
            'Fees' => json_decode($fees),
        ];
    }
}
