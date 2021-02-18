<?php

class DBController
 {
  // DATABASE CONNECTION PROPERTIES - original
  protected $host = 'localhost';
  protected $user = 'root';
  protected $password = '';
  protected $database = 'bookshaven';



  // DATABASE CONNECTION PROPERTIES - REMOTE DATABASE CONNECTION
  // protected $host = 'sql12.freemysqlhosting.net';
  // protected $user = 'sql12392441';
  // protected $password = 'PyisC5Xz1i';
  // protected $database = 'sql12392441';



  // connection property
  public $con = null;

  // call constructor
  public function __construct()
  {
    $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    if ($this->con->connect_error){
      echo "Fail".$this->con->connect_error;
    }
  }

  public function __destruct(){
    $this->closeConnection();
  }


  // for mysql closing connection
  protected function closeConnection(){
    if ($this->con != null){
      $this->con->close();
      $this->con = null;
    }

  }


}


 ?>
