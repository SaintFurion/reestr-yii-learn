<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sites}}`.
 */
class m230913_115754_create_sites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sites}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(12)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'domain_id' => $this->integer(),
            'server_id' => $this->integer(),
        ]);

        // creates index for column `domain_id`
        $this->createIndex(
            '{{%idx-sites-domain_id}}',
            '{{%sites}}',
            'domain_id'
        );

        // add foreign key for table `{{%domain}}`
        $this->addForeignKey(
            '{{%fk-sites-domain_id}}',
            '{{%sites}}',
            'domain_id',
            '{{%domains}}',
            'id',
            'CASCADE'
        );

        // creates index for column `server_id`
        $this->createIndex(
            '{{%idx-sites-server_id}}',
            '{{%sites}}',
            'server_id'
        );

        // add foreign key for table `{{%server}}`
        $this->addForeignKey(
            '{{%fk-sites-server_id}}',
            '{{%sites}}',
            'server_id',
            '{{%servers}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%domain}}`
        $this->dropForeignKey(
            '{{%fk-sites-domain_id}}',
            '{{%sites}}'
        );

        // drops index for column `domain_id`
        $this->dropIndex(
            '{{%idx-sites-domain_id}}',
            '{{%sites}}'
        );

        // drops foreign key for table `{{%server}}`
        $this->dropForeignKey(
            '{{%fk-sites-server_id}}',
            '{{%sites}}'
        );

        // drops index for column `server_id`
        $this->dropIndex(
            '{{%idx-sites-server_id}}',
            '{{%sites}}'
        );

        $this->dropTable('{{%sites}}');
    }
}
