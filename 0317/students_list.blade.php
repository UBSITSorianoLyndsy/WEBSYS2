<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
    border: 1px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>







@extends('master_layout.layout')
@section('title','Student List')

@section('1st', 'Student ID')
@section('2nd', 'Firstname')
@section('3rd', 'Lastname')

@section('n1', '123')
@section('n2', 'May')
@section('n3', 'Soriano')

@section('fn1', '1232')
@section('fn2', 'Lyndsy')
@section('fn3', 'Gomez')

@section('ln1', '1123')
@section('ln2', 'Maria')
@section('ln3', 'Deguzman')


@section('content')
    <p>Student List Here</p>
    
@endsection

@section('table')
    <p>Student List Here - Database</p>
    <div class="container">
    <table>
    <thead>
      <tr>
                    <th>ID</th>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Course</th>
                    
      </tr>
    </thead>
    <tbody>
         @foreach($data as $student)<!--$students from compact/$student(any) = alias--> 
            <tr>
                <td>{{$student->idstudent}}</td> <!--column from table--->
                <td>{{$student->studentId}}</td>
                <td>{{$student->firstName}}</td>
                <td>{{$student->middleName}}</td>
                <td>{{$student->lastName}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->courseCode}}</td>
                <th><a href="{{url('destroy', $student->idstudent)}}">Delete</a></th>
                <th><a href="{{route('students.edit', $student->idstudent)}}">Edit</a></th>
            </tr>
          @endforeach
          <tr> Total Age:</tr>
          <tr>{{$result}}</tr>
           
    </tbody>
</table>
</div>   

<a href="{{url('students/create')}}"><h1>Add Student</h1></a>
@endsection