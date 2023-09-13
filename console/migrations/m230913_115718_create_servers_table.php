<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%servers}}`.
 */
class m230913_115718_create_servers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%servers}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(12)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%servers}}');
    }
}
