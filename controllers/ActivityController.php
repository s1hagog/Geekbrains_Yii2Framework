<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/8/2019
 * Time: 10:05 PM
 */

namespace app\controllers;


use app\base\BaseController;
use app\controllers\actions\ActivityCreateAction;

class ActivityController extends BaseController
{
    public function actions()
    {
        return [
            'create' => ['class' => ActivityCreateAction::class, 'name'=> 'Alex'],
            'new'=> ['class' => ActivityCreateAction::class, 'name' => "Max"]
        ];
    }
}