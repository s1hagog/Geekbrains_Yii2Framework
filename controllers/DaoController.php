<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/21/2019
 * Time: 4:32 PM
 */

namespace app\controllers;

use app\base\BaseController;
use app\components\DaoComponent;

class DaoController extends BaseController
{
    public function actionTest()
    {

        /**
         * @var DaoComponent $dao
         */
        $dao = \Yii::$app->dao;

        $dao->inserts();
        $users = $dao->getUsers();
        $activityUser=$dao->getActivityUser(\Yii::$app->request->get('user'));
        $activity = $dao->getActivity();
        $countActivity = $dao->getCountActivity();
        $reader = $dao->getReader();
        return $this->render('dao', [
            'users' => $users,
            'activityUser' => $activityUser,
            'activity'=> $activity,
            'countActivity' => $countActivity,
            'reader' => $reader
        ]);
    }

}