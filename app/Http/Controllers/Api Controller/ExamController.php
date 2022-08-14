<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Student;
use App\Models\Subject;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class ExamController extends Controller
{

    public function index()
    {
        $subject=Subject::all();
       return response()->json($subject);
    }

    public function show($student_id)
    {
        $student=DB::table('students')
            ->select('first_name','last_name')
            ->where('id', $student_id)
            ->get();



        $result=Exam::where('student_id',$student_id)->get();



        return [
            'student' => json_decode($student),
            'Result'=>json_decode($result),

        ];
    }
}
