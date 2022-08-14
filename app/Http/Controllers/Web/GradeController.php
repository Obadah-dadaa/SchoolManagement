<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\Grade;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
USE App\Models\Teacher;
use Mockery\Matcher\Subset;
use App\Models\Subject;
use App\Models\TeachersSubject;

class GradeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $grade = Grade::with('section')->get();
        return view('grades.index')->with('grades', $grade);
    }

    public function create()
    {
        $section=Section::all();
        $subject=Subject::all();
        $teacher=Teacher::with('subject')->get();
        return view('class.addclass', compact('section', 'teacher', 'subject'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name'=> 'string|required',
            'number'=> 'required',
            'teacher'=> 'required',
        ];

        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return redirect()->back()
            ->withErrors($validated)
            ->withInput();
        }
       
        if($request->has('name')) if(!is_null($request->name)) $grade_data['name'] = $request->name;
        $grade = Grade::create($grade_data);
        $grade->section()->attach($request->number);
        
        foreach($request->teacher as $data){  
        $subject_teacher_data=[];  
        $subject_teacher_data['subject_id']= json_decode($data[0],true)['subject_id'];
        $subject_teacher_data['teacher_id']= json_decode($data[0],true)['student_id'];
        $subject_teacher =TeachersSubject::create( $subject_teacher_data);
        }
        return view('dashboard');
    }

    public function view()
    {
        return view('class.view-class-info');
    }

    public function show(Request $request)
    {
        $grade = DB::table('grades')->where('name','=', $request->grade)->value('id');
        $section = DB::table('sections')->where('name','=', $request->section)->value('id');
        $student=Student::where('grade_id',$grade)->where('section_id',$section)->with('grade','section')->get();
        
        return view('class.show', compact('student'));
    }

    public function edit($id)
    {
        $grade = Grade::find($id)->with('section');
        return view('grade.edit')->with('grade', $grade);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'section_number'=> ['string'],
        ];

        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return response()->with($validated->errors());
        }

        $section_data = [];
        if($request->has('section_number')) if(!is_null($request->section_number)) $section_data['section_number'] = $request->section_number;

        $grade = Grade::find($id);
        $grade->section()->update( $section_data);
    }

    public function destroy($id)
    {
        $grade = Grade::find($id)->delete;
        return redirect()->back();
    }
}
