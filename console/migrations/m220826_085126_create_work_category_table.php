<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%work_category}}`.
 */
class m220826_085126_create_work_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%work_category}}', [
            'id' => $this->primaryKey(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%work_category_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255),
        ]);

        $this->createTable('{{%work}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'date' => $this->date(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->createTable('{{%work_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),

            'name' => $this->string(255),
            'organ' => $this->string(255),
            'section' => $this->string(255),
            'spec' => $this->text(),
        ]);


        $this->addForeignKey('fk_work_to_work_category', 'work', 'category_id', 'work_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_work_category_lang_to_work_category', 'work_category_lang', 'owner_id', 'work_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_work_lang_to_work', 'work_lang', 'owner_id', 'work', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%work_lang}}');
        $this->dropTable('{{%work}}');
        $this->dropTable('{{%work_category_lang}}');
        $this->dropTable('{{%work_category}}');
    }
}
