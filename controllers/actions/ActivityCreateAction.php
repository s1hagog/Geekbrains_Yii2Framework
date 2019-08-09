<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/8/2019
 * Time: 10:24 PM
 */

namespace app\controllers\actions;


use app\base\actions\BaseAction;
use app\components\ActivityComponent;
use app\models\Activity;
use yii\base\Action;

class ActivityCreateAction extends BaseAction
{
    public $name;


    public function run()
    {
        $activityComponent = \Yii::createObject(['class' => ActivityComponent::class, 'classModel' => Activity::class]);

        $model = $activityComponent->getModel();

        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            $model->title = null;

            if(\Yii::$app->activity->createActivity($model)){

            }else{
                print_r($model->getErrors());exit;
            }

            print_r($model->getAttributes());
            exit;
        }

        return $this->controller->render('create', ['name' => $this->name, 'model' => $model]);
    }
}