<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%default_admin_user}}`.
 */
class m210817_064513_create_default_admin_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%user}}', [
            'username' => 'admin',
            'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('123456'),
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%user}}', [
            'username' => 'admin',
        ]);
    }
}
