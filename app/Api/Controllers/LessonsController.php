<?php
/**
 * Created by PhpStorm.
 * User: deyu
 * Date: 2016/7/30
 * Time: 13:33
 */

namespace App\Api\Controllers;



use App\Api\Transformers\LessonTransformer;
use App\Lesson;

class LessonsController extends BaseController
{
    public function index(){
        $lessons = Lesson::all()->toArray();
        $letr=new LessonTransformer();
        $res=[];
        foreach($lessons as $lesson){
            $res[]=$letr->transformer($lesson);
        }
        return $res;
    }
}