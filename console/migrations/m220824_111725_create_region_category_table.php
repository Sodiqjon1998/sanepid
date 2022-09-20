<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%region_category}}`.
 */
class m220824_111725_create_region_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%region_category}}', [
            'id' => $this->primaryKey(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%region_category_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255),
        ]);

        $this->createTable('{{%region}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'img' => $this->string(255),
            'name' => $this->string(255),
            'phone' => $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%region_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),

            'title' => $this->string(255),
            'content' => $this->text(),
        ]);


        $this->addForeignKey('fk_region_to_region_category', 'region', 'category_id', 'region_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_region_category_lang_to_region_category', 'region_category_lang', 'owner_id', 'region_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_region_lang_to_region', 'region_lang', 'owner_id', 'region', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%region_lang}}');
        $this->dropTable('{{%region}}');
        $this->dropTable('{{%region_category_lang}}');
        $this->dropTable('{{%region_category}}');
    }
}
