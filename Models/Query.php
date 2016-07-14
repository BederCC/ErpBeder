<?php namespace Models;
    /**
     *
     */

    use mysqli as mysqli;
    class Query
    {
      var $servername;
      var $username;
      var $password;
      var $dbname;

      var $connection;



      public function __construct()
      {
        $this->servername=$GLOBALS['server'];
        $this->dbname=$GLOBALS['base_datos'];
        $this->username=$GLOBALS['user_bd'];
        $this->password=$GLOBALS['pass_bd'];

        // Check connection
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
      }



      function consulta($query)
      {
        $resultado = mysqli_query($this->connection,$query);
        return $resultado;
      }


    }

 ?>