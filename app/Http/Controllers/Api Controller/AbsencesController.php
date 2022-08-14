<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\HelperClasses\Message;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class AbsencesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'reason' => ['required', 'string', 'max:255'],
            'image' => ['required', 'string'],
            'student_id' => ['required', 'integer'],
            'date' => ['required', 'date'],
        ]);

        $absences = Absence::create([
            'reason' => $request->reason,
            'image' => $request->image,
            'student_id' => $request->student_id,
            'date' => $request->date,
        ]);

        return [
            'Reason'=>json_decode($absences),
            'Message'=>'لقد تم تسجيل المعلومات بنجاح'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($student_id)
    {
        $student=DB::table('students')
            ->select('first_name','last_name')
            ->where('id', '=', $student_id)
            ->get();
        $absences=Absence::where('student_id',$student_id)->get();
        return [
            'Student'=>json_decode($absences),
            'Absence'=>json_decode($absences)
    ];
 }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $rules = [
            'reason' => ['required', 'string', 'max:255'],
            'image' => ['required', 'string'],
            'student_id' => ['required', 'integer', 'max:255'],
            'date' => ['required', 'date', 'max:255'],
        ];
        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return response()->json(new Message($validated->errors(), '404', false, 'error', 'validation error', 'تحقق من المعلومات المدخلة'));
        }
        $absences = Absence::find($id);
        $absences->reason = $request->reason;
        $absences-> image=$request->image;
        $absences->student_id =$request->student_id;
        $absences->date = $request->date;
        $absences->save();

        return [
            'Reason'=>json_decode($absences),
            'Message'=>'لقد تم تعديل المعلومات بنجاح'
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $absence=Absence::find($id);
        $absence->delete();
        return [
            'Message'=>'لقد تمت عملية الحذف بنجاح'
        ];
    }
}
