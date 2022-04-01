<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%genres}}`.
 */
class m220329_061851_create_genres_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%genres}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ]);

        $this->insert('genres', ['name' => 'RPG']);
        $this->insert('genres', ['name' => 'Action RPG']);
        $this->insert('genres', ['name' => 'Tactical RPG']);
        $this->insert('genres', ['name' => 'jRPG']);
        $this->insert('genres', ['name' => 'Visual Novel']);
        $this->insert('genres', ['name' => 'Turn-based Strategy']);
        $this->insert('genres', ['name' => 'Real-time Strategy']);
        $this->insert('genres', ['name' => 'First-person Shooter']);
        $this->insert('genres', ['name' => 'Third-person Shooter']);
        $this->insert('genres', ['name' => 'Action']);
        $this->insert('genres', ['name' => 'Action/Adventure']);
        $this->insert('genres', ['name' => 'Quest']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%genres}}');
    }
}
