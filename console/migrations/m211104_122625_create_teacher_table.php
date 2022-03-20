<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teacher}}`.
 */
class m211104_122625_create_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{_teacher}}', [
            'id' => $this->primaryKey(),
            'full_name'=>$this->string(255)->notNull(),
            'age'=>$this->tinyInteger(),
            'phone'=>$this->string(255),
            'address'=>$this->text(),
            'gender' => $this->tinyInteger(1)->notNull(),
            'status'=>$this->tinyInteger(1)->notNull()->defaultValue(1),
            'is_deleted' => $this->tinyInteger(1)->notNull()->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{_teacher}}');
    }
}
