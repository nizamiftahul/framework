<?php

namespace phpocean\core\database;

class Database {

    public function db()
    {
        $connection = new \PDO("mysql:dbname=t;host:localhost", "root", "");
        return new \NotORM($connection);
    }

}