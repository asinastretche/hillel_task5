<?php

namespace App\Models;

use App\Orm\Select;

class Post
{
    protected $tableName = 'post';
    private Select $select;

    public function __construct()
    {
        $this->select = new Select;
    }

    public  function findOne()
    {
        return [
            'id' => 1,
            'authorID' => 1,
            'title' => 'title1',
            'body' => 'body1'
        ];
    }

    public  function findAll() : ?array
    {
        $this->select->setTableName($this->tableName);
        return $this->select->execute();
    }
}