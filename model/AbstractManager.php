<?php


class AbstractManager
{
    protected Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function query($statement, $attribute = null, $one = false)
    {
        if ($attribute) {
            return $this->db->prepare($statement, $attribute, $one);
        } else {
            return $this->db->query($statement, $one);
        }
    }

    public function insert($array)
    {
        $sql_part = [];
        $attribute = [];

        foreach ($array as $key => $value) {
            $sql_part[] = $key . ' = ?';
            $attribute[] = $value;
        }

        $sql_part = implode(', ', $sql_part);
        $this->query('INSERT INTO ' . $this->table . ' SET ' . $sql_part, $attribute);
    }

    public function update($array, $where, $id)
    {
        $sql_part = [];
        $attribute = [];

        foreach ($array as $key => $value) {
            $sql_part[] = $key . ' = ?';
            $attribute[] = $value;
        }
        $attribute[] = $id;

        $sql_part = implode(', ', $sql_part);
        $this->query('UPDATE ' . $this->table . ' SET ' . $sql_part . ' WHERE ' . $where . ' =?', $attribute);
    }

    public function delete($where, $id)
    {
        $this->query('DELETE FROM ' . $this->table . ' WHERE ' . $where . ' =? ', $id);
    }

    public function select($where = null, $id = null, $one = false)
    {
        if (empty($where)) {
            return $this->query('SELECT * FROM ' . $this->table);
        } else {
            return $this->query('SELECT * FROM ' . $this->table . ' WHERE ' . $where . ' =? ', $id, $one);
        }
    }
}