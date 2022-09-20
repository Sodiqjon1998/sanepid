<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sign}}`.
 */
class m220826_133347_create_sign_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sign}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(255)->unique()->notNull(),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sign}}');
    }
}
