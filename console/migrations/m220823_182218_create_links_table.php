<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%links}}`.
 */
class m220823_182218_create_links_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%links}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255),
            'url' => $this->string(255),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);

        $this->createTable('{{%links_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' =>$this->string(255),
        ]);

        $this->addForeignKey('fk_links_lng_to_links', 'links_lang', 'owner_id', 'links', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%links_lang}}');
        $this->dropTable('{{%links}}');
    }
}
