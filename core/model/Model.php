<?php

namespace phpocean\core\model;

class Model {

    public $db;

    public function __construct()
    {
        $core = new \phpocean\core\database\Database;
        $this->db = $core->db();
    }

    public function findAll()
    {
        return $this->db->{$this->table}();
    }

    public function findByPk($id)
    {
        # code...
    }

    public function findByAttributes($where)
    {
        # code...
    }

    public function save($attr)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }
}