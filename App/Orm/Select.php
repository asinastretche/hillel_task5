<?php

namespace App\Orm;
use PDO;
class Select
{
    private string|array $field = '*' ;
    private string|array $tableName;
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

    public function build():string
    {
        return "SELECT ".$this->getField()." FROM ". $this->getTableName();
    }

    public function execute() :?array
    {
        $result = $this->connect->query($this->build(), PDO::FETCH_ASSOC);
        return $result->fetchAll();
    }
}