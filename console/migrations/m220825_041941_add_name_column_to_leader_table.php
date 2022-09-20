<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%leader}}`.
 */
class m220825_041941_add_name_column_to_leader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('leader', 'name', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('leader', 'name');
    }
}
