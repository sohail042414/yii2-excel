<?php

use yii\db\Migration;

/**
 * Class m210703_122702_create_import_tables
 */
class m210703_122702_create_import_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%first_table}}', [
            'id' => $this->primaryKey(),
            'field_1' => $this->string(64)->null(),
            'field_2' => $this->string(64)->null(),
            'field_3' => $this->string(64)->null(),
            'field_4' => $this->string(64)->null(),
            'field_5' => $this->string(64)->null(),
            'field_6' => $this->string(64)->null(),
            'field_7' => $this->string(64)->null(),
            'field_8' => $this->string(64)->null(),
            'field_9' => $this->string(64)->null(),
            'field_10' => $this->string(64)->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);

        $this->createTable('{{%second_table}}', [
            'id' => $this->primaryKey(),
            'field_1' => $this->string(64)->null(),
            'field_2' => $this->string(64)->null(),
            'field_3' => $this->string(64)->null(),
            'field_4' => $this->string(64)->null(),
            'field_5' => $this->string(64)->null(),
            'field_6' => $this->string(64)->null(),
            'field_7' => $this->string(64)->null(),
            'field_8' => $this->string(64)->null(),
            'field_9' => $this->string(64)->null(),
            'field_10' => $this->string(64)->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m210703_122702_create_import_tables cannot be reverted.\n";
        $this->dropTable('{{%first_table}}');
        $this->dropTable('{{%second_table}}');
        
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210703_122702_create_import_tables cannot be reverted.\n";

        return false;
    }
    */
}
