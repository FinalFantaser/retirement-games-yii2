<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_games}}`.
 */
class m220329_070923_create_user_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_games}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'genre' => $this->string(),
            'developer' => $this->string(),
            'release_date' => $this->timestamp(),
            'platform' => $this->string()->notNull(),
            'media_type' => $this->string(),
            'status' => $this->string()->defaultValue('В процессе'),
            'remarks' => $this->string(),
        ]);

        $this->addForeignKey(
            'user_id',
            'user_games',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_games}}');

        $this->dropForeignKey(
            'user_id',
            'users'
        );
    }
}
