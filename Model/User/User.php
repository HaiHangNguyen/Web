<?php
namespace Web\Model\User;
use Web\Model\Database\Connection;
include  '../Database/Connection.php';

class User
{
    const USER_TABLE_NAME = 'User';
    protected $_connection;
    protected $_data = [];
    public function __construct(Connection $connection) {
        $this->_connection = $connection;
    }
    public function getData($key) {
        return $this->_data[$key];
    }

    public function load($id)
    {
        $userData = $this->_connection->get($id, static::USER_TABLE_NAME);
        $this->_data = $userData;
        return true;
    }

    public function loadLogin($usn, $pass, $tbn) {
        $userData = $this->_connection->findUserInLogin($usn, $pass, $tbn);
        $this->_data = $userData;
        return $userData;
    }

    public function save($username, $pass) {

    }




}