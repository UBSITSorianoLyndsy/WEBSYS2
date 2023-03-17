@extends('master_layout.layout')
@section('title','Student Form')

@section('content')
    <p>Student Form Here</p>
    <form action="{{route('students.store')}}" method="POST">
        @csrf <!--toke for security prposes--->
        <!--name = for php, id = for js-->
        Student ID: <input type="text" name="studentId"><br>
        First Name: <input type="text" name="firstName"><br>
        Middle Name: <input type="text" name="middleName"><br> 
        Last Name: <input type="text" name="lastName"><br>
        Age: <input type="number" name="age"><br>
        Course Code: <select name="courseId">
        @foreach($courses as $course_data)
        <option value="{{$course_data->id}}">{{$course_data->courseCode}}</option>
        @endforeach
        </select><br>
        <input type="submit">
    </form>
@endsection