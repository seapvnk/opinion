<?php

class User extends Model
{
    protected static $table = 'users';
    protected static $columns = [
        'id',
        'username',
        'password',
        'email',
    ];
}