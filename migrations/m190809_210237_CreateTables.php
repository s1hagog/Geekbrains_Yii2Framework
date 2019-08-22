<?php

use yii\db\Migration;

/**
 * Class m190809_210237_CreateTables
 */
class m190809_210237_CreateTables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activity', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150)->notNull(),
            'description' => $this->text(),
            'dateStart' => $this->dateTime()->notNull(),
            'dateEnd' => $this->date()->notNull(),
            'flag' => $this->string(150),
            'isBlocked' => $this->boolean()->notNull()->defaultValue(0),
            'isRepeatable' => $this->boolean()->notNull()->defaultValue(0),
            'isNotifying' => $this->boolean()->notNull()->defaultValue(0),
            'repeatableType' => $this->string(150),
            'email' => $this->string(150),
            'createAt' =>  $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'isDeleted' => $this->boolean()->notNull()->defaultValue(0)
        ]);


        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'email' => $this->string(150)->notNull(),
            'password_hash' => $this->string(150)->notNull(),
            'token' => $this->string(150)->notNull(),
            'auth_key' => $this->string(150)->notNull(),
            'createAt' =>  $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'isDeleted' => $this->boolean()->notNull()->defaultValue(0)
        ]);

        $this->createIndex('userEmailIndex', 'users', 'email', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('activity');
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190809_210237_CreateTables cannot be reverted.\n";

        return false;
    }
    */
}
