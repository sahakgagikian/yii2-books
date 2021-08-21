<?php

use yii\db\Migration;

/**
 * Class m210816_211030_authors_books
 */
class m210816_211030_authors_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('authors_books', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'book_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey('fk_book_id', 'authors_books', 'book_id', 'books', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_author_id', 'authors_books', 'author_id', 'authors', 'id' ,'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_book_id', 'authors_books');
        $this->dropForeignKey('fk_author_id', 'authors_books');
        $this->dropTable('authors_books');
    }

}
