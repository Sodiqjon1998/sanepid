<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_category}}`.
 */
class m220824_092641_create_news_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_category}}', [
            'id' => $this->primaryKey(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%news_category_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255),
        ]);

        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'img' => $this->string(255),
            'date' => $this->date(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%news_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255),
            'content' => $this->text(),
        ]);


        $this->addForeignKey('fk_news_to_news_category', 'news', 'category_id', 'news_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_news_category_lang_to_news_category', 'news_category_lang', 'owner_id', 'news_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_news_lng_to_news', 'news_lang', 'owner_id', 'news', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news_lang}}');
        $this->dropTable('{{%news}}');
        $this->dropTable('{{%news_category_lang}}');
        $this->dropTable('{{%news_category}}');
    }
}
