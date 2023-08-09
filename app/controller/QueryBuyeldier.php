<?php

namespace App\controller;

use Aura\SqlQuery\QueryFactory;
use PDO;

class QueryBuyeldier
{
    private $queryFactory;
    protected $db;
    public function __construct()
    {
        $config = require_once(dirname(__DIR__) . '/config/config.php');
        $this->db = new PDO("{$config['connect']};dbname={$config['db']};",$config['username'],$config['password']);
        $this->queryFactory = new QueryFactory('mysql');
    }

    public function select($table){
        $select = $this->queryFactory->newSelect();
        $select
            ->cols(['*'])
            ->from($table);

        $sth = $this->db->prepare($select->getStatement());

        $sth->execute($select->getBindValues());

        $result = $sth->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insert($table, $data){
        $insert = $this->queryFactory->newInsert();

        $insert
            ->into($table)
            ->cols($data);
        $sth = $this->db->prepare($insert->getStatement());

        $sth->execute($insert->getBindValues());
    }
    public function update($table, $data, $id){
        $update = $this->queryFactory->newUpdate();

        $update
            ->table($table)
            ->cols($data)
            ->where('ID =:ID')
            ->bindValue('id',$id);
        $sth = $this->db->prepare($update->getStatement());
        $sth->execute($update->getBindValues());
    }
    public function delete($table, $id){
        $delete = $this->queryFactory->newDelete();
        $delete
            ->from($table)
            ->where('id =:id')
            ->bindValue('id',$id);
        $sth = $this->db->prepare($delete->getStatement());

        // execute with bound values
        $sth->execute($delete->getBindValues());
    }
}