<?php

use yii\db\Migration;

/**
 * Class m190822_053218_AlterActivityTable
 */
class m190822_053218_AlterActivityTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('activity', 'name', 'title');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190822_053218_AlterActivityTable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190822_053218_AlterActivityTable cannot be reverted.\n";

        return false;
    }
    */
}
