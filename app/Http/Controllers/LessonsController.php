<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Transformer\LessonTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class LessonsController extends ApiController
{
    protected $lessonTransformer;

    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer=$lessonTransformer;
        $this->middleware('auth.basic',['only'=>['store','update']]);
    }


    public function index(){
        $lesson = Lesson::all();
        return $this->response([
            'status'=>'success',
            'data'=>$this->lessonTransformer->transformCollection($lesson->toArray())
        ]);
    }
    public function store(Request $request){
        if(!$request->get('title') or !$request->get('body')){
            return $this->setStatusCode(442)->responseNotFound("checking error");
        }
        $lesson = Lesson::create($request->all());
        if($lesson)
            return $this->response([
                'status'=>'success',
                'data'=>$this->lessonTransformer->transform($lesson)
            ]);
    }
    public function show($id){
        $lesson = Lesson::find($id);
        if(!$lesson)
            return $this->setStatusCode(404)->responseNotFound();
        return $this->response([
            'status'=>'success',
            'data'=>$this->lessonTransformer->transform($lesson)
        ]);
    }
}
