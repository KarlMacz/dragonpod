<?php
  $config = [
    'environment' => 'development',
    'app' => [
      'name' => 'Dragon Pod Hotel and Resort',
      'url' => [
        'development' => 'http://localhost/dragonpod',
        'production' => ''
      ]
    ],
    'database_connection' => [
      'development' => [
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db_name' => 'dragonpod_hotel'
      ],
      'production' => [
        'hostname' => '',
        'username' => '',
        'password' => '',
        'db_name' => ''
      ]
    ]
  ];
?>
