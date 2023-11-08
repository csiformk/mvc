<?php
namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class ArticleModel extends Model
{
    protected static $table = 'post';

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (titre , contenu) VALUES (? , ?) ',
            [
                $post['titre'],
                $post['contenu']
            ]
            );
    }
}
