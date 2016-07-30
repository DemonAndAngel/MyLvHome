<?php

namespace App\Api\Transformers;
use League\Fractal\TransformerAbstract;

/**
 * Created by PhpStorm.
 * User: deyu
 * Date: 2016/7/30
 * Time: 14:14
 */
class LessonTransformer extends TransformerAbstract
{
    public function transformer($lesson){
        return [
            'title'=>$lesson['title'],
            'content'=>$lesson['body'],
            'is_free'=>(boolean)$lesson['free']
        ];
    }

}