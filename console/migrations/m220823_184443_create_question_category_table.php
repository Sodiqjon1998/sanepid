<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%question_category}}`.
 */
class m220823_184443_create_question_category_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%question_category}}', [
            'id' => $this->primaryKey(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%question}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%question_category_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
        ]);

        $this->createTable('{{%question_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255),
            'content' => $this->text(),
        ]);

        $this->addForeignKey('fk_question_to_question_category', 'question', 'category_id', 'question_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_question_category_lng_to_question_category', 'question_category_lang', 'owner_id', 'question_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_question_lng_to_question', 'question_lang', 'owner_id', 'question', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%question_lang}}');
        $this->dropTable('{{%question_category_lang}}');
        $this->dropTable('{{%question}}');
        $this->dropTable('{{%question_category}}');
    }
}
