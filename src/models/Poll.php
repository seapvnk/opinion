<?php

class Poll extends Model
{
    protected static $table = 'polls';
    protected static $columns = [
        'id',
        'title',
        'description',
    ];
}