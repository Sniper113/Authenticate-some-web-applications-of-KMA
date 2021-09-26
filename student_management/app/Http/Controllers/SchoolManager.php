<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolManager extends Controller{
    
    public function showStudent(Request $request){
        $studentList = DB::table('sinhviens');
        $studentList = $studentList->paginate(10);
        
        return view('student.student.index')->with([
            'studentList' => $studentList,
            'index'    => 1,
        ]);
    }

    public function showTeacher(Request $request){
        $teacherList = DB::table('giangviens');
        $teacherList = $teacherList->paginate(10);
        
        return view('student.teacher.index')->with([
            'teacherList' => $teacherList,
            'index'    => 1,
        ]);
    }

    public function showCourse(Request $request){
        $courseList = DB::table('monhocs');
        $courseList = $courseList->paginate(10);
        
        return view('student.course.index')->with([
            'courseList' => $courseList,
            'index'    => 1,
        ]);
    }
}