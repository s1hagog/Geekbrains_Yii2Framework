<?php

use yii\db\Migration;

/**
 * Class m190821_230621_InsertBase
 */
class m190821_230621_InsertBase extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users', [
            'id' => 1,
            'email' => 'test@test.ri',
            'password_hash' => 'password',
            'token' => 'token',
            'auth_key' => 'key'
        ]);
        $this->insert('users', [
            'id' => 2,
            'email' => 'test2@test.ri',
            'password_hash' => 'password',
            'token' => 'token',
            'auth_key' => 'key'
        ]);

        $this->batchInsert('activity', ['name', 'dateStart', 'dateEnd', 'user_id', 'isNotifying'], [
            [Yii::$app->security->generateRandomString(), date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 1, 0],
            [Yii::$app->security->generateRandomString(), date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 1, 0],
            [Yii::$app->security->generateRandomString(), date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 1, 0],
            [Yii::$app->security->generateRandomString(), date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 1, 0],
            [Yii::$app->security->generateRandomString(), date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 1, 0],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190821_230621_InsertBase cannot be reverted.\n";

        return false;
    }
    */
}
