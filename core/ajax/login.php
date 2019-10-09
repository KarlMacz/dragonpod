<?php
  require_once('../init.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $connection->escapeAll($_POST);

    if(Auth::login($input['email'], $input['password'])) {
      echo json_encode([
        'status' => 'ok',
        'message' => 'Log in successful. Redirecting...',
        'redirect_to' => (Auth::account()->type === 'Employee' ? './employee/' : './guest/')
      ]);
    } else {
      echo json_encode([
        'status' => 'fail',
        'message' => 'Invalid e-mail address and/or password.'
      ]);
    }
  }
?>
