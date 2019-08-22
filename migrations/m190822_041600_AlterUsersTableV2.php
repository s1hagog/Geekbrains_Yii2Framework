<?php

use yii\db\Migration;

/**
 * Class m190822_041600_AlterUsersTableV2
 */
class m190822_041600_AlterUsersTableV2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('users', 'token', 'string');
        $this->alterColumn('users',  'auth_key', 'string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190822_041600_AlterUsersTableV2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190822_041600_AlterUsersTableV2 cannot be reverted.\n";

        return false;
    }
    */
}
