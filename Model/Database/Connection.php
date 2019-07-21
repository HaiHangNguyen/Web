<?php
namespace Web\Model\Database;

class Connection {

    const SERVER = "localhost";
    const USERNAME = "haihang";
    const PASSWORD = "HaiHang6198!";
    const DATABASE = "testWeb";
    protected $conn;
    //protected $result;

    private function initConnection() {
        $this->conn = mysqli_connect(self::SERVER, self::USERNAME, self::PASSWORD, self::DATABASE);
    }

    public function add($tableName, $columns, $data){
        $this->initConnection();
        $query = "INSERT INTO $tableName (" . implode(',', $columns) . ") VALUE (" . implode(',', $data) . ")";
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
    public function get($id, $tableName) {
        $this->initConnection();
        $query = "SELECT * FROM '$tableName' WHERE id = '$id'";
        $result = $this->query($query);
        if ($result) {

        }
        $this->closeConnection();
    }

    public function findUserInLogin($username, $pass, $tableName) {
        $this->initConnection();
        $query = "SELECT * FROM '$tableName' WHERE username = '$username' AND pass = '$pass'";
        $result = $this->query();
        if ($result) {
            return $result;
        }

    }

    public function delete() {

    }
    public function update() {

    }

    protected function query($query) {
        return mysqli_query($this->conn, $query);
    }
    private function closeConnection() {
        $this->conn = NULL;
    }

}