<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use App\Models\Parents;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Section;
use App\Models\SectionsGrade;
use App\Models\FinancialFee;

class StudentController extends Controller
{
    public function __construct()
    {
       $this->middleware(['auth']);
    }

    public function index()
    {
        $students=Student::all();
        return view('student.index', compact('students'));
    }

    public function create($id)
    {
        $parent = Parents::find($id);
        $sections = Section::all();
        $grades = Grade::all();
        return view('student.addstudent', compact('parent', 'sections', 'grades'));
    }

    public function store(Request $request)
    {
        $rules = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'grade_id' => ['required', 'string'],
            'section_id' => ['required', 'string'],
            'parent_id' => ['required', 'string'],
            'bus_subscribe' => ['nullable'],
        ];
        
        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return redirect()->back()
            ->withErrors($validated)
            ->withInput();
        }

        $student_data= [];
        if($request->has('first_name')) if(!is_null($request->first_name)) $student_data['first_name'] = $request->first_name;
        if($request->has('last_name')) if(!is_null($request->last_name)) $student_data['last_name'] = $request->last_name;
        if($request->has('parent_id')) if(!is_null($request->parent_id)) $student_data['parent_id'] = $request->parent_id;
        if($request->has('grade_id')) if(!is_null($request->grade_id)) $student_data['grade_id'] = $request->grade_id;
        if($request->has('section_id')) if(!is_null($request->section_id)) $student_data['section_id'] = $request->section_id;
        if($request->has('bus_subscribe')) if(!is_null($request->bus_subscribe)) $student_data['bus_subscribe']= $request->bus_subscribe;

        $Financialfees_data = [];
        if($request->has('fees')) if(!is_null($request->fees)) $Financialfees_data['fees'] = $request->fees;
        if($request->has('discount')) if(!is_null($request->discount)) $Financialfees_data['discount'] = $request->discount;
        if($request->has('parent_id')) if(!is_null($request->parent_id)) $Financialfees_data['parent_id'] = $request->parent_id;

        $student = Student::create($student_data);
        $Financialfees_data['student_id'] = $student['id'];
        $financialfees = FinancialFee::create($Financialfees_data);
        $students = Student::where('parent_id', $request->parent_id)->with('parent','grade','section')->get();
        return view('student.show', compact('students'))->with('parent_id',$student_data['parent_id']);
    }

    public function show($id,Request $request)
    {
        $students = Student::where('parent_id', $request->id)->with('parent','grade','section')->get();
        return view('student.show', compact('students'))->with('parent_id',$id);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $sections = Section::all();
        $grades = Grade::all();
        return view('student.edit', compact('student', 'sections', 'grades'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'first_name' => ['string', 'nullable'],
            'grade_id' => ['nullable', 'integer'],
            'section_id' => ['nullable', 'integer'],
            'parent_id' => ['nullable', 'integer'],
            'bus_subscribe' => ['nullable'],
        ];
        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return redirect()->back()
            ->withErrors($validated)
            ->withInput();
        }
        $student_data = [];
        if($request->has('parent_id')) if(!is_null($request->parent_id)) $student_data['parent_id'] = $request->parent_id;
        if($request->has('first_name')) if(!is_null($request->first_name)) $student_data['first_name'] = $request->first_name;
        if($request->has('grade_id')) if(!is_null($request->grade_id)) $student_data['grade_id'] = $request->grade_id;
        if($request->has('section_id')) if(!is_null($request->section_id)) $student_data['section_id'] = $request->section_id;
        if($request->has('bus_subscribe')) if(!is_null($request->bus_subscribe)) $student_data['bus_subscribe']= $request->bus_subscribe;

        $student = Student::find($id);
        $student->update($student_data);
        $students = Student::where('parent_id', $request->parent_id)->with('parent','grade','section')->get();
        return view('student.show', compact('students'))->with('parent_id',$student_data['parent_id']);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        $students=Student::all();
        return view('student.index', compact('students'));
    }
}
