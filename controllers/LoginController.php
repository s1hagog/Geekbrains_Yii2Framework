<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/22/2019
 * Time: 1:08 AM
 */

namespace app\controllers;


use app\models\Users;
use yii\web\Controller;

class LoginController extends Controller
{

    public function actionSignIn()
    {

        /**
         * $var LoginComponent $login
         */

        $model = new Users();

        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            if(\Yii::$app->login->signIn($model)){
                $this->redirect(['/activity/create/']);
            }
        }

        return $this->render('signup', ['model'=> $model]);
    }

    public function actionSignUp()
    {

        /**
         * $var LoginComponent $login
         */

        $model = new Users();

        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            if(\Yii::$app->login->signUp($model)){
                $this->redirect(['/login/sign-in/']);
            }
        }

        return $this->render('signup', ['model'=>$model]);
    }
}