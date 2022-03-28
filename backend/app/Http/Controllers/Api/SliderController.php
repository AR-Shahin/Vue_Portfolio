<?php

namespace App\Http\Controllers\Api;

use App\Models\Crud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class SliderController extends Controller
{
    public function index()
    {
        try {
            $data = Crud::latest()->get();
            if ($data->count() != 0) {
                return sendSuccessResponse($data, 'Data Retrieved Successfully!');
            } else {
                return sendSuccessResponse($data, 'Data not found!');
            }
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }
}
