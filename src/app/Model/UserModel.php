<?php
namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class UserModel extends Model
{
    protected static $table = 'user';

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (nom , email) VALUES (? , ?) ',
            [
                $post['nom'],
                $post['email']
            ]
            );
    }

    public static function update($post,$id)
    {
        App::getDatabase()->prepareInsert(
            'UPDATE ' . self::$table . ' SET nom = ? , email = ? WHERE  id = ' . $id , 
            [
                $post['nom'],
                $post['email']
            ]
        );
    }
}
