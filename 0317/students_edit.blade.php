@extends('master_layout.layout')
@section('title','Student Form')

@section('content')
    <p>Student Edit</p>
    <form action="{{route('students.store')}}" method="POST">
        @csrf <!--toke for security prposes--->
        <!--name = for php, id = for js-->
        Student ID: <input type="text" name="studentId" value=""><br>
        First Name: <input type="text" name="firstName" value="{{$student -> firstName}}"><br>
        Middle Name: <input type="text" name="middleName" value=""><br> 
        Last Name: <input type="text" name="lastName" value=""><br>
        Age: <input type="number" name="age"><br>
        Course Code: <select name="courseId">
        @foreach($courses as $course_data)
        <option value="{{$course_data->id}}">{{$course_data->courseCode}}</option>
        @endforeach
        </select><br>
        <input type="submit">
    </form>
@endsection