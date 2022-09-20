<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%document}}`.
 */
class m220824_164459_create_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%document_category}}', [
            'id' => $this->primaryKey(),
            'status' => $this->integer()->defaultValue(1)
        ]);

        $this->createTable('{{%document_category_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255),
        ]);

        $this->createTable('{{%document}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'img' => $this->string(255),
            'url' => $this->string(255),
            'date' => $this->date(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%document_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),

            'title' => $this->string(255),
            'content' => $this->text(),
        ]);

        $this->addForeignKey('fk_document_to_document_category', 'document', 'category_id', 'document_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_document_category_lang_to_document_category', 'document_category_lang', 'owner_id', 'document_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_document_lang_to_document', 'document_lang', 'owner_id', 'document', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%document_lang}}');
        $this->dropTable('{{%document}}');
        $this->dropTable('{{%document_category_lang}}');
        $this->dropTable('{{%document_category}}');
    }
}
