<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user_games}}`.
 */
class m220401_102247_add_added_date_column_to_user_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user_games}}', 'added_date', $this->timestamp());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user_games}}', 'added_date');
    }
}
