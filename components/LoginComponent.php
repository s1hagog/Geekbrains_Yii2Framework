<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/22/2019
 * Time: 1:18 AM
 */

namespace app\components;


use app\models\Users;
use yii\base\Component;

class LoginComponent extends Component
{
    public function signUp(Users &$user): bool
    {
        $user->scenarioSignUp();
        if(!$user->validate(['email', 'password'])){
            return false;
        }

        $user->password_hash = $this->genHashPassword($user->password);

        if(!$user->save()){
            return false;
        }

        return true;
    }

    public function signIn(Users &$model):bool
    {
        $model->scenarioSignIn();
        if(!$model->validate(['email', 'password'])){
            return false;
        }

        $user = $this->getUserByEmail($model->email);
        if(!$this->validatePassword($model->password, $user->password_hash)){
            $model->addError('password', 'Wrong password');
            return false;
        }

        return \Yii::$app->user->login($user, 3600);


    }

    private function validatePassword($password, $password_hash):bool
    {
        return \Yii::$app->security->validatePassword($password, $password_hash);
    }

    private function getUserByEmail(string $email): ?Users
    {
        return Users::find()->andWhere(['email'=>$email])->one();
    }

    private function genHashPassword($password):string
    {
        return \Yii::$app->security->generatePasswordHash($password);
    }
}