<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/21/2019
 * Time: 4:34 PM
 */

namespace app\components;


use yii\base\Component;
use yii\db\Connection;
use yii\db\Query;

class DaoComponent extends Component
{

    public function getDb():Connection
    {
        return \Yii::$app->db;
    }


    public function getUsers()
    {
         $sql = 'SELECT * FROM users';

         return $this->getDb()->createCommand($sql)->queryAll();

    }

    public function getActivityUser($user_id)
    {
        $sql = 'SELECT * FROM activity WHERE user_id =:user';
        return $this->getDb()->createCommand($sql, [':user' => $user_id])->queryAll();
    }

    public function getActivity()
    {
        $query = new Query();
        $data = $query->from('activity')
            ->andWhere(['user_id'=>1])
            ->orderBy(['dateStart' => SORT_DESC])
            ->limit(2)
            ->one($this->getDb());
        return $data;
    }

    public function getCountActivity()
    {
        $query = new Query();
        $data = $query->from('activity')
            ->select('COUNT(id) AS cnt')
            ->scalar($this->getDb());
        return $data;
    }


    public function getReader()
    {
        $query = new Query();
        $data = $query->from('activity')
            ->createCommand()->query();
        return $data;
    }

    public function inserts(){


        //Другой способо использования тразакций , короткий
        
//        $this->getDb()->transaction(function (){
//            $this->getDb()->createCommand()
//                ->update('users', ['email' => 'email@email.ru'], ['id' => 1])
//                ->execute();
//            $this->getDb()->createCommand()
//                ->update('users', ['email' => 'emaasdasd    il@emadsasdail.ru'], ['id' => 2])
//                ->execute();
//        });


        $trans = $this->getDb()->beginTransaction();
        try{
            $this->getDb()->createCommand()
                ->update('users', ['email' => 'email@email.ru'], ['id' => 1])
                ->execute();
            $this->getDb()->createCommand()
                ->update('users', ['email' => 'emaasdasd    il@emadsasdail.ru'], ['id' => 2])
                ->execute();

            $trans->commit();
        }catch (\Exception $exception){
            $trans->rollBack();
        }
    }
}