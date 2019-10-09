<?php
  function config($what) {
    global $config;

    $val = null;

    foreach(explode('.', $what) as $index => $chunk) {
      if($index === 0) {
        $val = $config[$chunk];
      } else {
        $val = $val[$chunk];
      }
    }

    return $val;
  }

  function root_url() {
    return config('app.url.' . config('environment'));
  }

  function full_name($arr) {
    if(isset($arr['middle_name']) && $arr['middle_name'] !== '') {
      return $arr['first_name'] . ' ' . $arr['middle_name'] . '. ' . $arr['last_name'];
    } else {
      return $arr['first_name'] . ' ' . $arr['last_name'];
    }
  }
?>
