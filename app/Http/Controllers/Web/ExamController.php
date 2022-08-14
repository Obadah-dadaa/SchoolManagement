<?php

namespace App\Http\Controllers\web;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $exams = Exam::with('student')->get();
        $subjects=Subject::all();
        $grades=Grade::with('section')->get();
        $sections=Section::all();
        return view('exam.show_exams', compact( 'grades', 'students', 'subjects','sections'));
    }

    public function create()
    {
        $students=Student::all();
        $subjects=Subject::all();
        $grades=Grade::with('section')->get();
        $sections=Section::all();
        return view('exam.add-marks', compact( 'grades', 'students', 'subjects','sections'));
    }

    public function addmarks(Request $request)
    {
        $students = Student::where('grade_id', $request->grade)->where('section_id',$request->section)->get();
        $subject = Subject::where('id', $request->subject)->get();
        $grade =Grade::where('id', $request->grade)->get();
        $ids_array=[];
        $ids_array['subject_id']=$request->subject;
        $ids_array['grade_id']=$request->grade;
        $ids_array['section_id']=$request->section;
        return view('exam.add_marks_for_student', compact('request', 'students', 'subject','grade', 'ids_array'));
    }

    public function store(Request $request)
    {
        $rules = [
            'student_id'=> ['required', 'integer'],
            'grade'=> ['required', 'integer'],
            'section'=> ['required', 'integer'],
            'subject'=> ['required', 'integer'],
            'type'=> ['in: شفهي, مذاكرة, نهائي'],
            'mark'=> ['required']
        ];

        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return redirect()->back()
            ->withErrors($validated)
            ->withInput();
        }
        $exam_data = [];
        if($request->has('type')) if(!is_null($request->type)) $exam_data['type'] = $request->type;
        if($request->has('mark')) if(!is_null($request->mark)) $exam_data['mark'] = $request->mark;
        if($request->has('grade')) if(!is_null($request->grade)) $exam_data['grade_id'] = $request->grade;
        if($request->has('subject')) if(!is_null($request->subject)) $exam_data['subject_id'] = $request->subject;
        if($request->has('section')) if(!is_null($request->section)) $exam_data['section_id'] = $request->section;

        foreach ($request -> student_id as $student_id ) {
            $exam_data['student_id'] = $student_id;
            $exam = Exam::create($exam_data);
        }
        $students=Student::all();
        $subjects=Subject::all();
        $grades=Grade::with('section')->get();
        $sections=Section::all();
        return view('exam.add-marks', compact( 'grades', 'students', 'subjects','sections'));
    }

    public function show(Exam  $exam)
    {
        $subjects=Subject::all();
        $grades=Grade::with('section')->get();
        $sections=Section::all();
        return view('exam.show_exams', compact( 'grades', 'subjects','sections'));
    }

    public function showforstudent(Request $request)
    {
        $exams=Exam::where('grade_id', $request->grade_id)->where('section_id', $request->section_id)->where('subject_id', $request->subject_id)
        ->with('student','subject','grade', 'section')->get();
        return view('exam.show_students_marks', compact( 'exams'));
    }

    public function update(Request $request, Exam  $exam)
    {
        $rules = [
            'mark'=> 'integer',
        ];

        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return redirect()->back()
            ->withErrors($validated)
            ->withInput();
        }
        if($request->has('mark')) if(!is_null($request->mark)) $exam_data['mark'] = $request->mark;
        $exam->update($exam_data);
    }

    public function destroy($id)
    {
        $exam = Exam::find($id)->delete();
        return  redirect()->back();
    }
}
