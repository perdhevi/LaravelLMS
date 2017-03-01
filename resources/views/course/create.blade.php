@extends('layouts.app')

@section('content')

<!--
<link href="{{ URL::asset('css/summernote.css')   }}" rel="stylesheet">
<script src="{{  URL::asset('js/summernote.min.js')  }}" > </script>
-->


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Course Content</div>

                <div class="panel-body">
                <form id="formCourse" method="POST" class="form-horizontal" role ="form" action="{{ action('CourseController@store') }}">
                <div class="box-body">
                        <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" class="form-control" placeholder="Title" name="title">
                        </div>
                        <div class="form-group" >
                                <textarea class="form-control" placeholder="content" name="content" id="content"></textarea>
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
