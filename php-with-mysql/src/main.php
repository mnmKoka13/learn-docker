<?php

// データベースに接続
$dsn = 'mysql:host=db;port=3306;dbname=sample';
$username = 'root';
$password = 'secret';
$pdo = new PDO($dsn, $username, $password);

// use Tableの中身を全出力
$statement = $pdo->query('select * from user');
$statement->execute();
while ($row = $statement->fetch()) {
  echo '- id: ' . $row['id'] . ', name: ' . $row['name'] . PHP_EOL;
}

// データベースから切断
$pdo = null;

