<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banner}}`.
 */
class m220823_190238_create_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banner}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255),
        ]);

        $this->createTable('{{%banner_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' =>  $this->string(6)->notNull(),
            'content' => $this->text()->notNull(),
        ]);
        $this->addForeignKey('fk_banner_lng_to_banner', 'banner_lang', 'owner_id', 'banner', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%banner_lang}}');
        $this->dropTable('{{%banner}}');
    }
}
