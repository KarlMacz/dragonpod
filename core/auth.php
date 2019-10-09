<?php
  class Auth {
    public static function check() {
      global $_SESSION;

      return (isset($_SESSION['auth_id']) ? true : false);
    }

    public static function login($email, $password) {
      global $_SESSION;
      global $connection;

      /*
      * Uncomment line below if you're using hash on passwords.
      */
      // $password = hash('sha256', $password);

      $account = $connection->query("SELECT * FROM `tbl_accounts`
        WHERE `email`='$email'
          AND `password`='$password'")->first();

      if($account !== null) {
        $_SESSION['auth_id'] = $account['id'];
        $_SESSION['auth_type'] = $account['type'];

        return true;
      } else {
        return false;
      }
    }

    public static function logout() {
      global $_SESSION;

      unset($_SESSION['auth_id']);
      unset($_SESSION['auth_type']);
    }

    public static function account() {
      global $_SESSION;
      global $connection;

      $id = $_SESSION['auth_id'];
      $account = $connection->query("SELECT * FROM `tbl_accounts`
        WHERE `id`='$id'")->first();

      unset($account['password']);

      return json_decode(json_encode($account), false);
    }

    public static function user() {
      global $_SESSION;
      global $connection;

      $id = $_SESSION['auth_id'];

      if($_SESSION['auth_type'] === 'Employee') {
        $user = $connection->query("SELECT * FROM `tbl_employees`
          WHERE `account_id`='$id'")->first();
      } else {
        $user = $connection->query("SELECT * FROM `tbl_guests`
          WHERE `account_id`='$id'")->first();
      }

      $user['full_name'] = full_name($user);

      return json_decode(json_encode($user), false);
    }
  }
?>
