<?php


class Database
{
    private $db;

    public function __construct()
    {
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

        if (is_null($this->db)) {
            $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT . '', '' . DB_USER . '', '' . DB_PASS . '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db = $db;
        }
        return $this->db;
    }

    public function query($statement, $one = false)
    {
        $req = $this->db->query($statement);

        if (
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ) {
            return $req;
        }

        $req->setFetchMode(PDO::FETCH_OBJ);

        if ($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }

        return $data;
    }

    public function prepare($statement, $attribute, $one = false)
    {
        $req = $this->db->prepare($statement);
        $res = $req->execute($attribute);

        if (
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ) {
            return $res;
        }

        $req->setFetchMode(PDO::FETCH_OBJ);

        if ($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }

        return $data;
    }

    public function count($statement, $attribute = null)
    {
        if ($attribute) {
            $req = $this->db->prepare($statement);
            $req->execute($attribute);
        } else {
            $req = $this->db->query($statement);
        }
        return $req->rowCount();
    }

    public function lastId()
    {
        return $this->db->lastInsertId();
    }
}