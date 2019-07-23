<?php

class dbmodel {

        protected $host="localhost";
        protected $username="quannd";
        protected $password="151299";
        protected $db_name="demo";
        protected $tb_name="members";

        public function connect() {

            $con = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            return $con;
        }
    }