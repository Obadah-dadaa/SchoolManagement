<?php

namespace App\Http\Controllers\Api;

use App\HelperClasses\Message;
use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\Consult;
use App\Models\PsychologicalCounselor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conselor=PsychologicalCounselor::get();
        return [
            'PsychologicalCounselor Info'=>json_decode($conselor)
,
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'parent_id' => ['required', 'integer'],
            'psychological_counselor_id' => ['required', 'integer'],
            'title' => ['required', 'string','max:60'],
            'description' => ['required', 'string'],
            'rating' => ['required', 'integer'],

        ]);

        $consult = Consult::create([
            'parent_id' => $request->parent_id,
            'psychological_counselor_id' => $request->psychological_counselor_id,
            'title' => $request->title,
            'description' => $request->description,
            'rating' => $request->rating,
        ]);

        return [
            'Consult'=>json_decode($consult),
            'Message'=>'لقد تم تسجيل المعلومات بنجاح'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($parent_id)
    {
        $parent=DB::table('parents')
            ->select('name')
            ->where('id', '=', $parent_id)
            ->get();
        $consult=Consult::where('parent_id',$parent_id)->get();
        return [
            'Parent' => json_decode($parent),
            'Consult' =>json_decode($consult),
            ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'parent_id' => ['required', 'integer'],
            'psychological_counselor_id' => ['required', 'integer'],
            'title' => ['required', 'string','max:60'],
            'description' => ['required', 'string'],
            'rating' => ['required', 'integer'],
        ];
        $validated = Validator::make($request->all(),  $rules);
        if($validated->fails())
        {
            return response()->json(new Message($validated->errors(), '404', false, 'error', 'validation error', 'تحقق من المعلومات المدخلة'));
        }
        $consult = Consult::find($id);
        $consult->parent_id = $request->parent_id;
        $consult-> psychological_counselor_id=$request->psychological_counselor_id;
        $consult->title =$request->title;
        $consult->description = $request->description;
        $consult->rating = $request->rating;
        $consult->save();

        return [
            'Consult'=>json_decode($consult),
            'Message'=>'لقد تم تعديل المعلومات بنجاح'
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consult=Consult::find($id);
        $consult->delete();
        return [
            'Message'=>'لقد تمت عملية الحذف بنجاح'
        ];
    }
}
