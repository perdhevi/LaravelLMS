<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\course as course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$courses = course::all();

	return view('course.index')->with('courses',$courses);
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
        //
        //$request->course_owner = "me";
        //$request->created_at = date("yyyy-mm-dd h:i:s");
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
        
        return view('course.edit')->with('course',$c);
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
