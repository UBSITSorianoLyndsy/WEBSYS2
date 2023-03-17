<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

    //$students = Student::all(); //the same as above //shorter way //direct manipulate model //Select all from students //need to import use App\Models\Student;
    $students = DB::table('students')
                ->join('course', 'students.courseId', '=', 'course.id')
                ->select('students.*', 'course.*') //select the column //select('*') ->all columns of all tables
                ->get(); //execute
    $data = DB::table('students')    
                ->join('course', 'students.courseId', '=', 'course.id')
                ->select('*', 'students.id as idstudent') //select the column //select('*') ->all columns of all tables
                ->where('age','>', '18')
                ->get(); //execute
    $result = DB::table('students')
                ->where('age','>', '18')
                ->sum('age');
        //View and controller
        //call index -> load the page
        //route controller - views
    //display student page
    return view('students.students_list', compact('data', 'result')); //last
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
    public function store(Request $request) //andito lahat nung form
    {
        //save input
        Student::create($request->all()); //model
        return redirect()->route('students.index');

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
        
        $courses = DB::table('course')->get();
        $student = DB::table('students')->get();
        return view('students.students_edit', compact('student', 'courses'));
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
    public function destroy(Request $student)
    {
        $students = Student::find($student);
        $students->delete();
        return redirect()->back();
    }

    public function delete_student(Request $studentId) {
        $students = Student::find($studentId);
        $students->delete();
        return redirect()->back();
    }
}
