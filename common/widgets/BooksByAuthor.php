<?php


namespace common\widgets;


use common\models\Author;
use yii\base\Widget;
use yii\data\ActiveDataProvider;


/**
 * @property $model common\models\Book
 * @property $allAuthorIds array
 * @property $searchModel backend\models\BookSearch
 * @property $dataProvider yii\data\ActiveDataProvider
 */
class BooksByAuthor extends Widget
{

    public $author;

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        if (is_int($this->author)) {
            $this->author = Author::findOne($this->author);
        }
    }

    public function run()
    {
        parent::run();
        $dataProvider = new ActiveDataProvider(['query' => $this->author->getBooks()]);
        return $this->render('filterByAuthor', [
            'authorId' => $this->author,
            'dataProvider' => $dataProvider,
        ]);
    }

}