<?php

namespace Web\model\database;

class connection
{
    const MYSQL_SERVER = 'localhost';
    const MYSQL_USER_NAME = 'phpmyadmin';
    const MYSQL_PASS = 'Trang1234#';
    protected $database;

    public function add($tableName, $data, $columns)
    {
        $this->initConnection($this->database);
        $query = "INSERT INTO $tableName (" . implode(',', $columns) . ") VALUES (" . implode(',', $data) . ")";
        $result = $this->query($query);
        if ($result) {
            // Xu ly ket qua
        }
        $this->closeConnection();
    }
    /**
     * @param $id
     * @param $tableName
     *
     * @return array Mang cac thong tin cot cua bang
     */
    public function get($id, $tableName)
    {

    }
    public function delete()
    {

    }
    public function update()
    {

    }
    private function initConnection()
    {
        static::MYSQL_USER_NAME;

    }
    protected function query($query)
    {

    }
    private function closeConnection()
    {

    }

}