<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\course as course;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $user = Auth::user();
        
        $courses = $user->courses_taken();
        $myCourses = $user->courses_owned();

	return view('course.index')->with('courses',$courses)->with('courseOwned', $myCourses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $c = course::find(0);
        return view('course.create')->with('course',$c);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new course();
        
        
        $course->title = $request->title;
        $course->content = $request->content;
        $course->description =$request->title;
        $course->course_owner = "Me";
        $course->created_at = date("Y-m-d H:i:s");
        
        
        $course->save();
        
        return redirect()->action('CourseController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $c = course::find($id);
        
        return view('course.show')->with('course',$c);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $c = course::find($id);
        
        $enrolled = $c->users();
        $qb = $c->quizes();
        
        
        
        return view('course.edit')->with('course',$c)->with('enrolled',$enrolled)->with('quizes', $qb);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $course = course::find($id);
        $course->title = $request->title;
        $course->content = $request->content;
        $course->description =$request->title;
        $course->course_owner = "Me";
        $course->created_at = date("Y-m-d H:i:s");
        
        
        $course->save();
        
        return redirect()->action('CourseController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
