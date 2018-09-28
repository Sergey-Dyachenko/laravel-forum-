<?php

namespace App\Http\Controllers;

use App\Lesson;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Response;


class LessonsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */

    public function index()
    {
        //All is bad
        //No way to attach a meta data
        //Linking db structure to the API output
        //No way to signal  headers/response code

        $lesson = Lesson::all();
        return response([
            'data' => $lesson->toArray()
        ], 404);



    }

    public function show($id)
    {
        $lesson = Lesson::find($id);

        if (! $lesson)
        {
            return response::json([
                'error' => [
                    'message' => 'Lesson does not exist'
                ]
        ], 404);
        }

        return Response::json([
            'data' => $lesson->toArray()
        ], 200);
    }


}
