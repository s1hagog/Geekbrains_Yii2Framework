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
        if($activity->validate()){
            return true;
        }
        return false;
    }
}