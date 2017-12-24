<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CommentForm extends Model
{
    public $comment;
    
    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['comment'], 'string', 'length' => [3,250]]
        ];
    }

// записываем все нужные параметры комментария к статье
    public function saveComment($article_id)
    {
        $comment = new Comment;
        $comment->text = $this->comment;
        $comment->user_id = Yii::$app->user->id;
        $comment->article_id = $article_id;
// если статус комментария 0, то он ждет подтверждения админ
// если 1 - подтвержден
        $comment->status = 0;
        $comment->date = date('Y-m-d');
        return $comment->save();

    }
}