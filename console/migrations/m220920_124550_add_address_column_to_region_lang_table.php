<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%region_lang}}`.
 */
class m220920_124550_add_address_column_to_region_lang_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('region_lang', 'address', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('region_lang', 'address');
    }
}
