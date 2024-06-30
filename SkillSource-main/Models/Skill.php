<?php


namespace Models;
use Support\Contracts\ModelInterface;
use Support\Model;

class Skill extends Model implements ModelInterface
{
    protected static $fillable = [
        'skill_name'
    ];

}

?>
