<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $grades=Grade::get();
       return response()->json($grades);
    }


    public function show($parent_id)
    {
        $parent=DB::table('parents')
            ->select('name')
            ->where('id', '=', $parent_id)
            ->get();
        $student=Student::where('parent_id',$parent_id)->get();

        return [
            'Parent' =>json_decode($parent),
            'Students'=>json_decode($student),
        ];
    }


}
