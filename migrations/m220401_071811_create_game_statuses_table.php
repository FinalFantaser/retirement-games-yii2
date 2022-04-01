<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%game_statuses}}`.
 */
class m220401_071811_create_game_statuses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%game_statuses}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

        //Создание данных
        $this->insert('game_statuses', ['name' => 'Еще не играл']);
        $this->insert('game_statuses', ['name' => 'В процессе']);
        $this->insert('game_statuses', ['name' => 'Заброшена']);
        $this->insert('game_statuses', ['name' => 'Пройдена']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%game_statuses}}');
    }
}
