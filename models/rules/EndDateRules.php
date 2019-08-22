<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/22/2019
 * Time: 3:36 AM
 */

namespace app\models\rules;


use yii\validators\Validator;

class EndDateRules extends Validator
{

    public function validateAttribute($model, $attribute)
    {
        if($this->isEmpty($model->$attribute)){
            $model->$attribute = $model->dateStart;
        }
    }

}