<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pages}}`.
 */
class m220826_061112_create_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pages}}', [
            'id' => $this->primaryKey(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%pages_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),

            'title' => $this->string(),
            'content' => $this->text(),
        ]);


        $this->addForeignKey('fk_pages_lang_pages', 'pages_lang', 'owner_id', 'pages','id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pages_lang}}');
        $this->dropTable('{{%pages}}');
    }
}
