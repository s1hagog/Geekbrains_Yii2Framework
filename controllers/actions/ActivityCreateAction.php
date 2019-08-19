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
use GuzzleHttp\Psr7\Response;
use yii\base\Action;
use yii\bootstrap\ActiveForm;

class ActivityCreateAction extends BaseAction
{
    public $name;


    public function run()
    {
        $activityComponent = \Yii::createObject(['class' => ActivityComponent::class, 'classModel' => Activity::class]);

        $model = $activityComponent->getModel();


        //Создает сессию
        $session = \Yii::$app->session;
        $session->set('prevURL', $_SERVER['HTTP_REFERER']);

        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());

            if(\Yii::$app->request->isAjax){
                \Yii::$app->response->format=\yii\web\Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }

            //$model->title = null;
            if(\Yii::$app->activity->createActivity($model)){

            }else{
                print_r($model->getErrors());exit;
            }

            //После создания формы отобразим ее на основной странице события
            return $this->controller->render('index', ['name' => $this->name, 'model'=>$model]);

        }

        return $this->controller->render('create', ['name' => $this->name, 'model' => $model]);
    }
}