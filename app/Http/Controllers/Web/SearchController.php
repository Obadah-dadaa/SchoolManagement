<?php

namespace App\Http\Controllers;

use App\Models\FinancialFee;
use App\Models\Parents;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\HelperClasses\Message;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use  Illuminate\Support\Facades\Validator;

class SearchController extends Controller{

    public function search_s(Request $request)
    {
        $students = Student::where('first_name','Like',"%$request->search_v%")->orwhere('last_name','Like',"%$request->search_v%")->get();
        return view('student.search',compact('students'));
    }

    public function search_t(Request $request)
    {
        $teachers= Teacher::where('name','Like',"%$request->search_t%")->get();
        return view('teacher.search',compact('teachers'));
    }

    public function search_p(Request $request)
    {
        $parents= Parents::where('name','Like',"%$request->search_p%")->get();
        return view('parent.search',compact('parents'));
    }
}
