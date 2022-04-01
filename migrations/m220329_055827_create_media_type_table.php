<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%media_type}}`.
 */
class m220329_055827_create_media_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%media_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ]);

        $this->insert('media_type', ['name' => 'Картридж']);
        $this->insert('media_type', ['name' => 'CD']);
        $this->insert('media_type', ['name' => 'DVD']);
        $this->insert('media_type', ['name' => 'Цифровая копия']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%media_type}}');
    }
}
