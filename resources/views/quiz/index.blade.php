@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course Taken</div>

                <div class="panel-body">
                <table border=1>
                        <tr><td>Title</td><td>Description</td>
                        </tr>
                @foreach($courses as $course)
                        <tr>
                        <td><a href="course/{{$course->id}}">{{$course->title}}</a></td>
                        <td>{{$course->description}}</td>
                        </tr>
                @endforeach
                </table>
                </div>
                <div class="panel-heading">Course Owned</div>

                <div class="panel-body">
                <table border=1>
                        <tr><td>Title</td><td>Description</td><td>edit</td>
                        </tr>
                @foreach($courseOwned as $course)
                        <tr>
                        <td><a href="course/{{$course->id}}">{{$course->title}}</a></td>
                        <td>{{$course->description}}</td>
                        <td><a href="course/{{$course->id}}/edit">edit</a></td>
                        </tr>
                @endforeach
                </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
