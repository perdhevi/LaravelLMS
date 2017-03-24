@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$course->title}}</div>
                <div class="panel-body">
                @if($course->video > 0)
                <video width="640" height="480" controls>
                <source src="/video/{!!$course->video!!}" type="video/mp4">
                Your browser does not support the video tag.
                </video> 
                @endif 
                    {!!$course->content!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
