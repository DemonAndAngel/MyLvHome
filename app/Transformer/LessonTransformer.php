<?php
/**
 * Created by PhpStorm.
 * User: deyu
 * Date: 2016/7/29
 * Time: 15:09
 */

namespace App\Transformer;


class LessonTransformer extends Transformer
{
    public function transform($item){
        return [
            'title'=>$item['title'],
            'content'=>$item['body'],
            'is_free'=>(boolean)$item['free']
        ];
    }
}