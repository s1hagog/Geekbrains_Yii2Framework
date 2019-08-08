<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/7/2019
 * Time: 6:52 PM
 */

namespace app\controllers;


use yii\web\Controller;

class TeacherController extends Controller
{
    public function actionStudent()
    {
        return $this->render('student', ['name'=>'Alex', 'name2' => 'Ben']);
    }

}