<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%header}}`.
 */
class m220823_154019_create_header_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%header}}', [
            'id' => $this->primaryKey(),
            'logo' => $this->string(255),
            'belief_number' => $this->string(20),
            'phone' => $this->string(255),
            'email' => $this->string(255),
        ]);

        $this->createTable('{{%header_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6),

            'title' => $this->string(255),
            'address' => $this->string(255),
            'location' => $this->string(255),
            'content' => $this->text(),
        ]);

        $this->addForeignKey('fk_header_lang_to_header', 'header_lang', 'owner_id', 'header', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%header_lang}}');
        $this->dropTable('{{%header}}');
    }
}
