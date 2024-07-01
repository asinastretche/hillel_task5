<?php

namespace App\Models;

use App\Orm\Select;

class Post
{
    protected $tableName = 'post';
    protected $orderBy = 'author_id';
    protected $groupBy = 'author_id';
    protected $limit = '1,2';
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
     //  $this->select->setField('author_id, COUNT(*) AS COUNT');
      // $this->select->setGroupBy($this->groupBy);
       $this->select->setOrderBy($this->orderBy);
       $this->select->setLimit($this->limit);
       return $this->select->execute();
    }
}