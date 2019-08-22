<?php

use yii\db\Migration;

/**
 * Class m190821_230109_AlterTables
 */
class m190821_230109_AlterTables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('activity', 'user_id', $this->integer()->notNull());

        $this->addForeignKey('activityUserFK', 'activity', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('activity', 'user_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190821_230109_AlterTables cannot be reverted.\n";

        return false;
    }
    */
}
