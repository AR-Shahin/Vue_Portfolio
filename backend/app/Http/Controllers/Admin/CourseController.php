<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();
        return view('Backend.course.index', compact('courses'));
    }

    function view(Course $course)
    {
        $course =  $course->load(['videos']);
        return view('Backend.course.view', compact('course'));
    }
    function createCourseVideo(Course $course)
    {
        return view('Backend.course.create', compact('course'));
    }
    function storeCourseVideo(Request $request, Course $course)
    {
        $course->videos()->create([
            'title' => $request->title,
            'link' => $request->link,
            'order' => $request->order,
            'status' => $request->status,
            'slug' => str($request->title)->slug(),
        ]);
        return back();
        return view('Backend.course.create', compact('course'));
    }
}
