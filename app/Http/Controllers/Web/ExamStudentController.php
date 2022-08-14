<?php

namespace App\Http\Controllers\web;

use App\Models\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class ExamStudentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function show(Request $request)
    {
        $subjects=Subject::all();
        $grades=Grade::with('section')->get();
        $sections=Section::all();
        return view('exam.show_all_student_marks', compact( 'grades', 'subjects','sections'));
    }

        public function showmarks(Request $request)
    {
        $student_id = DB::table('students')->where('first_name', $request->first_name)->where('last_name', $request->last_name)->value('id');
        $exams=Exam::where('grade_id', $request->grade_id)->where('section_id', $request->section_id)->where('student_id', $student_id)
        ->with('subject', 'student', 'grade', 'section')->get();
        return view('exam.marks', compact('exams'));
    }
}
