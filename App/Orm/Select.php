<?php

namespace App\Orm;
use PDO;
class Select
{
    private string|array $field = '*' ;
    private string|array $tableName = '';
    private string|array $groupBy = '';
    private string|array $orderBy = '';
    private string|array $limit = '';
    private string|array $offset = '';
    private PDO $connect;

    public function __construct()
    {
        $this->connect = (new Connect)->getConnect();
    }

    public function getField()
    {
        if (!is_array($this->field)){
            return $this ->field;
        }
    }
    public function setField($field):void
    {
        $this->field = $field;
    }

    public function getTableName()
    {
        if (!is_array($this->tableName)){
            return $this ->tableName;
        }
    }
    public function setTableName($tableName): void
    {
        $this->tableName = $tableName;
    }

    public function getGroupBy()
    {
        if (!is_array($this->groupBy)){
            return $this ->groupBy;
        }
    }
    public function setGroupBy($groupBy): void
    {
        $this->groupBy = $groupBy;
    }

    public function getOrderBy()
    {
        if (is_array($this->orderBy)){
            $orderItem = [];
            foreach ($this->orderBy as $key => $value) {
                $orderItem[] = $key. " " . $value;
            }
            return implode(", ", $orderItem);
        } else {
            return $this->orderBy;
        }
    }
    public function setOrderBy($orderBy): void
    {
        $this->orderBy = $orderBy;
    }

    public function getLimit()
    {
        return $this ->limit;
    }
    public function setLimit($limit): void
    {
        $this->limit = $limit;
    }


    public function build():string
    {
     $sql=  "SELECT ".$this->getField().
            " FROM ". $this->getTableName();
     if (!empty($this->getGroupBy())){
         $sql .= " GROUP BY ". $this->getGroupBy();
     }
     if (!empty($this->getOrderBy())){
         $sql .= " ORDER BY ". $this->getOrderBy();
     }
     if (!empty($this->getLimit())){
        $sql .= " LIMIT ". $this->getLimit();
     }

     return $sql;
    }

    public function execute() :?array
    {
        $result = $this->connect->query($this->build(), PDO::FETCH_ASSOC);
        return $result->fetchAll();
    }
}