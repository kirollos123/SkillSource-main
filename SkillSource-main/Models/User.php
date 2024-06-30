<?php

namespace Models;

use Support\Contracts\ModelInterface;
use Support\Model;

class User extends Model implements ModelInterface {

    protected static $fillable = [
        'name', 'email', 'password', 'phone', 'account_type'
    ];

}
?>