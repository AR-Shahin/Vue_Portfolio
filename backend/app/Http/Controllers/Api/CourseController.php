<?php

namespace App\Http\Controllers\Api;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class CourseController extends Controller
{
    public function index()
    {
        try {
            $data = Course::with('videos')->latest()->get();
            if ($data->count() != 0) {
                return sendSuccessResponse($data, 'Data Retrieved Successfully!');
            } else {
                return sendSuccessResponse($data, 'Data not found!');
            }
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }

    public function singleCourse($slug)
    {
        try {
            $course = Course::with('videos')->whereSlug($slug)->first();
            if ($course) {
                return sendSuccessResponse($course, 'Data Retrieved Successfully!');
            } else {
                return sendSuccessResponse([], 'Data Not Found!', 404);
            }
        } catch (QueryException $e) {
            return sendErrorResponse([], "Something went wrong! {$e->getMessage()}", 400);
        }
    }
}
