<?php
class DBCon {
 private $_host = "localhost";
 private $_user = "blog";
 private $_pwd = "blog";
 private $_db = "blog";

  private $con;

  function __construct() {
    $this->con = new mysqli($this->_host, $this->_user, $this->_pwd, $this->_db);
  }


  function getCon() {
    return $this->con;
  }

  function close() {
    $this->con->close();
  }

}


?>
