<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gamesdb}}`.
 */
class m220329_060735_create_gamesdb_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gamesdb}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'genre' => $this->string(),
            'developer' => $this->string(),
            'release_date' => $this->timestamp(),
            'platform' => $this->string()->notNull(),
            'media_type' => $this->string(),
            'status' => $this->string()->defaultValue('В процессе'),
            'remarks' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gamesdb}}');
    }
}
