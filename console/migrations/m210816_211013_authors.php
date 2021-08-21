<?php

use yii\db\Migration;

/**
 * Class m210816_211013_authors
 */
class m210816_211013_authors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
            'surname' => $this->string(64)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('authors');
    }

}
