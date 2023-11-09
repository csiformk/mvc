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

    public static function update($post,$id)
    {
        App::getDatabase()->prepareInsert(
            'UPDATE ' . self::$table . ' SET titre = ? , contenu = ? WHERE  id = ' . $id , 
            [
                $post['titre'],
                $post['contenu']
            ]
        );
    }
}
