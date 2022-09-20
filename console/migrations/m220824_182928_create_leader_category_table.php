<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%leader_category}}`.
 */
class m220824_182928_create_leader_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%leader_category}}', [
            'id' => $this->primaryKey(),
            'status' => $this->integer()->defaultValue(1)
        ]);

        $this->createTable('{{%leader_category_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255),
        ]);

        $this->createTable('{{%leader}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'img' => $this->string(255),
            'phone' => $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%leader_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),

            'job' => $this->string(255),
            'days' => $this->string(255),
            'bio_info' => $this->text(),
            'authority' => $this->text(),
        ]);

        $this->addForeignKey('fk_leader_to_leader_category', 'leader', 'category_id', 'leader_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_leader_category_lang_to_leader_category', 'leader_category_lang', 'owner_id', 'leader_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_leader_lang_to_leader', 'leader_lang', 'owner_id', 'leader', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%leader_lang}}');
        $this->dropTable('{{%leader}}');
        $this->dropTable('{{%leader_category_lang}}');
        $this->dropTable('{{%leader_category}}');
    }
}

