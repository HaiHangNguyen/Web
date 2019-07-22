<?php
namespace Web\Model\Database;

class Connection {

    protected $_conn;
    //protected $result;

    private function initConnection() {
        $this->_conn = mysqli_connect("localhost", "haihang", "Haihang6198!", "testWeb");
    }

    private function closeConnection() {
        if($this->_conn) {
            mysqli_close($this->_conn);
        }
    }

    public function add($tableName, $columns, $data){
        $this->initConnection();
//        $query = "INSERT INTO $tableName (" . implode(',', $columns) . ") VALUE (" . implode(',', $data) . ")";
//        $result = $this->query($query);
//        if ($result) {
//            // Xu ly ket qua
//        }
//        $this->closeConnection();
        $fieldList = '';
        $valueList = '';
        foreach ($data as $key => $value) {
            $fieldList .= ",$key";
            $valueList .= ",$value";
        }
        $sql = 'INSERT INTO '.$tableName. '('.trim($fieldList, ',').') VALUES ('.trim($valueList, ',').')';
        return mysqli_query($this->_conn, $sql);
    }

    public function getList($sql) {
        $this->initConnection();
        $result = mysqli_query($this->_conn, $sql);
        if(!$result) {
            die("Cau truy van bi sai");
        }
        $return = array();
        while($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }
        mysqli_free_result($result);
        return $return;
    }

    public function getRow($sql) {
        $this->initConnection();
        $result = mysqli_query($this->_conn, $sql);
//        if(!$result) {
//            die ("Cau truy van bi sai");
//        }
        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if($row) {
            return $row;
        }
        else return false;
    }

//    public function findUserInLogin($username, $pass, $tableName) {
//        $this->initConnection();
//        $query = "SELECT * FROM '$tableName' WHERE username = '$username' AND pass = '$pass'";
//        $result = $this->query();
//        if ($result) {
//            return $result;
//        }
//        $this->closeConnection();
//    }

    public function delete($tableName, $where) {
        $this->initConnection();
        $sql = "DELETE FROM $tableName WHERE $where";
        return mysqli_query($this->_conn, $sql);
    }

    public function update($tableName, $data, $where) {
        $this->initConnection();
        $sql = '';
        foreach ($data as $key => $value) {
            $sql .= "$key = $value";
        }
        $sql = 'UPDATE '.$tableName. ' SET '.trim($sql, ',').' WHERE '.$where;
        return mysqli_query($this->_conn, $sql);
    }

    public function query($query) {
        $this->initConnection();
        return mysqli_query($this->_conn, $query);
    }


}