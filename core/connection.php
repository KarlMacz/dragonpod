<?php
  date_default_timezone_set('Asia/Manila');

  class Connection {
    private $connection, $query;

    public function __construct() {
      $hostname = config('database_connection.' . config('environment') . '.hostname');
      $username = config('database_connection.' . config('environment') . '.username');
      $password = config('database_connection.' . config('environment') . '.password');
      $database = config('database_connection.' . config('environment') . '.db_name');

      $this->connection = mysqli_connect($hostname, $username, $password, $database);
    }

    public function escape($input) {
      return mysqli_real_escape_string($this->connection, $input);
    }

    public function escapeAll($inputArray, $except = []) {
      $inputs = [];

      foreach($inputArray as $key => $input) {
        if(!in_array($key, $except)) {
          $inputs[$key] = mysqli_real_escape_string($this->connection, $input);
        } else {
          $inputs[$key] = $input;
        }
      }

      return $inputs;
    }

    public function query($sql) {
      $this->query = mysqli_query($this->connection, $sql);

      return $this;
    }

    public function get() {
      if(mysqli_num_rows($this->query) > 0) {
        $rows = [];

        while($row = mysqli_fetch_assoc($this->query)) {
          $rows[] = $row;
        }

        return $rows;
      } else {
        return null;
      }
    }

    public function first() {
      if(mysqli_num_rows($this->query) > 0) {
        return mysqli_fetch_assoc($this->query);
      } else {
        return null;
      }
    }

    public function result() {
      if(mysqli_affected_rows($this->connection) > 0) {
        return true;
      } else {
        return false;
      }
    }

    public function id() {
      return mysqli_insert_id($this->connection);
    }

    public function error() {
      return mysqli_error($this->connection);
    }
  }

  $current_timestamp = date('Y-m-d H:i:s');
  $connection = new Connection();
?>
