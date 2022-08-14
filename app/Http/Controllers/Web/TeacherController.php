<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Teacher;
use Response;
use App\Http\Controllers\Controller;
use App\Models\Subject;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $teachers=Teacher::with('subject')->get();
        return view('teacher.index',compact('teachers'));
    }

    public function create()
    {
        $subject = Subject::all();
        return view('teacher.add-teacher', compact('subject'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string' , 'max:255'],
            'subject' => ['required'],
            'phone_number' => ['required', 'string'],
            'email'=> ['required', 'string'],
            'password'=> ['required', 'string', 'confirmed'],
            'password_confirmation' => ['required','same:password']

        ];
        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return redirect()->back()
            ->withErrors($validated)
            ->withInput();
        }
        $teacher_data= [];
        if($request->has('name')) if(!is_null($request->name)) $teacher_data['name'] = $request->name;
        if($request->has('phone_number')) if(!is_null($request->phone_number)) $teacher_data['phone_number'] = $request->phone_number;
        if($request->has('email')) if(!is_null($request->email)) $teacher_data['email'] = $request->email;
        if($request->has('password')) if(!is_null($request->password)) $teacher_data['password'] = Hash::make($request->password);

        $teacher = Teacher::create($teacher_data);
        $teacher->subject()->attach($request->subject);
        $teachers=Teacher::with('subject')->get();
        return view('teacher.index',compact('teachers'));
    }

    public function show($id)
    {
        $teacher=Teacher::with('subject')->find($id);
        return view('teacher.profile', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher=Teacher::with('subject')->find($id);
        $subject = Subject::all();
        return view('teacher.edit-teacher', compact('teacher', 'subject'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'phone_number' => ['string'],
            'email'=> ['string'],
            'subject' => ['required'],
        ];

        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return redirect()->back()
            ->withErrors($validated)
            ->withInput();
        }
        $teacher_data= [];
        if($request->has('phone_number')) if(!is_null($request->phone_number)) $teacher_data['phone_number'] = $request->phone_number;
        if($request->has('email')) if(!is_null($request->email)) $teacher_data['email'] = $request->email;
        if($request->has('password')) if(!is_null($request->password)) $teacher_data['password'] = Hash::make($request->password);

        $teacher = Teacher::find($id);
        $teacher->update($teacher_data);
        foreach($request->subject as $item){
        $teacher->subject->attach($item);
        }
        $teachers=Teacher::with('subject')->get();
        return view('teacher.index',compact('teachers'));
    }

    public function destroy($id)
    {
        $teacher=Teacher::find($id);
        $teacher->delete();
        $teachers=Teacher::all();
        return view('teacher.index')->with('teachers', $teachers);
    }
}
