<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m220826_053656_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255),
        ]);

        $this->createTable('{{%about_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),

            'content' => $this->text(),
        ]);

        $this->addForeignKey('fk_about_lang_to_about', 'about_lang', 'owner_id', 'about', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_lang}}');
        $this->dropTable('{{%about}}');
    }
}
