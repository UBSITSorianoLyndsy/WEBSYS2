-------------------------------------------------------students_create -> view

@extends('master_layout.layout')
@section('title','Student Form')

@section('content')
    <p>Student Form Here</p>
    <form action="">
        Student ID: <input type="text" name="name"><br>
        First Name: <input type="text" name="name"><br>
        Middle Name: <input type="text" name="name"><br>
        Last Name: <input type="text" name="name"><br>
        Age: <input type="number" name="name"><br>
        Course Code: <select name="CourseCode" id="coursecode">
        @foreach($courses as $course_data)
        <option value="{{$course_data->courseCode}}">{{$course_data->courseCode}}</option>
        @endforeach
        </select><br>
        <input type="submit">
    </form>
@endsection

                   ---------------------------------StudentController.php

<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Student; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //----Query Builder----library (commands)
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //SELECT ALL FROM STUDENTS
    //----Query Builder----
    //$students = DB::table('students')->get(); //select all the data from students table //get() like execute

    $students = Student::all(); //the same as above //shorter way //direct manipulate model //Select all from students //need to import use App\Models\Student;
     

        //View and controller
        //call index -> load the page
        //route controller - views
    //display student page
    return view('students.students_list', compact('students')); //last
    //obj $students = compact('students') <-this is passed to view

    //return view('students.students_list', ['students' => $students]); //'students'key => $students value
    //orm (object relational m...)
    //query builder 
    //raw


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DB::table('course')->get();
        
        //calls the form
        return view('students.students_create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
