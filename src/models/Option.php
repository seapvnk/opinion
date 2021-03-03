<?php

class Option extends Model
{
    protected static $table = 'options';
    protected static $columns = [
        'id',
        'name',
        'poll_id',
        'votes',
    ];
}