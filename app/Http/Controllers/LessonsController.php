<?php

namespace App\Http\Controllers;

use App\Lesson;


class LessonsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */

    public function index()
    {
        $lesson = Lesson::all();
        return response([
            'data' => $lesson->toArray()
        ], 200);

    }


}
