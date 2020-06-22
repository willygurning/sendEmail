<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class StudentController extends Controller
{
    public function index(){
        $Student = Student::all();
        return view('student',['student'=>$Student]);
    }

    public function export_excel(){
        return Excel::download(new StudentExport,'student.xlsx');
    }
}
