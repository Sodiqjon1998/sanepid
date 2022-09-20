<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blocks}}`.
 */
class m220823_163515_create_blocks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blocks}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(255),
            'number' => $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%blocks_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6),

            'title' => $this->string(255),
        ]);

        $this->addForeignKey('fk_blocks_lang_to_blocks', 'blocks_lang', 'owner_id', 'blocks', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blocks_lang}}');
        $this->dropTable('{{%blocks}}');
    }
}
