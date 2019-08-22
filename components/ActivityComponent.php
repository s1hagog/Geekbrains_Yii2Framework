<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/9/2019
 * Time: 12:06 AM
 */

namespace app\components;


use app\models\Activity;
use yii\base\Component;

class ActivityComponent extends Component
{

    public $classModel;

    public function getModel()
    {
        return new $this->classModel();


    }

    public function createActivity(Activity &$activity): bool
    {
        $activity->user_id=\Yii::$app->user->getId();

        print_r($activity->getErrors());
        exit;


        if(!$activity->save()){
            return false;
        }
        return true;
    }
}