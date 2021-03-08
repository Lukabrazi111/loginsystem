<?php

class Dbh {
    private string $host = 'localhost';
    private string $user = 'root';
    private string $pwd = 'root';
    private string $dbName = 'loginsystem';

    protected function connect() {
        $dns = new PDO('mysql:host='.$this->host.';'.'dbname='.$this->dbName.';'. $this->user, $this->pwd);
        $dns->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dns;
    }

}
