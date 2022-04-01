<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%developers}}`.
 */
class m220329_061923_create_developers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%developers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%developers}}');
    }
}
