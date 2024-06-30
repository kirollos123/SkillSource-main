<?php


namespace Models;
use Support\Model;
use Support\Contracts\ModelInterface;

class Comment extends Model implements ModelInterface
{
    protected static $fillable = [
        'job_id',
        'user_id',
        'comment',
    ];

    protected static $table = 'comments';

    public static function job($id) {
        return static::belongsTo('comments', 'job_id', $id);
    }

    public static function user($id) {
        return static::belongsTo('users', 'user_id', $id)[0];
    }
}

?>
