<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%platforms}}`.
 */
class m220329_055032_create_platforms_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%platforms}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ]);

        $this->insert('platforms', ['name' => 'PC']);
        $this->insert('platforms', ['name' => 'Dendy/NES/Nintendo Famicom']);
        $this->insert('platforms', ['name' => 'SNES/Super Famicom']);
        $this->insert('platforms', ['name' => 'Nintendo 64']);
        $this->insert('platforms', ['name' => 'Nintendo Wii']);
        $this->insert('platforms', ['name' => 'Nintendo Wii U']);
        $this->insert('platforms', ['name' => 'Nintendo DS']);
        $this->insert('platforms', ['name' => 'Nintendo 3DS']);
        $this->insert('platforms', ['name' => 'Nintendo Switch']);
        $this->insert('platforms', ['name' => 'Sony PlayStation 1']);
        $this->insert('platforms', ['name' => 'Sony PlayStation 2']);
        $this->insert('platforms', ['name' => 'Sony PlayStation 3']);
        $this->insert('platforms', ['name' => 'Sony PlayStation 4']);
        $this->insert('platforms', ['name' => 'Sony PlayStation 5']);
        $this->insert('platforms', ['name' => 'PSP']);
        $this->insert('platforms', ['name' => 'PS Vita']);
        $this->insert('platforms', ['name' => 'Sega Mega Drive/Sega Genesis']);
        $this->insert('platforms', ['name' => 'Sega Dreamcast']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%platforms}}');
    }
}
