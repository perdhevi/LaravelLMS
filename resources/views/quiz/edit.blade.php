@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course Info</div>
                <div class="panel-body">

                <form id="formCourse" method="POST" class="form-horizontal" role ="form" action="{{ route('course.update', $course->id) }}">
                <div class="col-md-10">
                        <table border=1>
                        <tr><td>Name</td><td>Email</td>
                        </tr>                
                 @foreach($enrolled as $e)
                        <tr>
                        <td>{{$e->name}}</td>
                        <td>{{$e->email}}</td>
                        </tr>
                 @endforeach
                 </table>
                </div>
                <input type="hidden" name="_method" value="PUT">
                <div class="box-body">
                        <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$course->title}}">
                        </div>
                        <div class="form-group" >
                                <textarea class="form-control" placeholder="content" name="content" id="content">{!!$course->content!!}</textarea>
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-danger" id="buttonSave">Save</button>
                        </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_content')
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
  <script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>

@endsection
