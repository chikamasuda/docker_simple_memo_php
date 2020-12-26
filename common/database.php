<?php
/**
 * PDOを使ってデータベースに接続する
 * @return PDO
 */
function getDatabaseConnection() {
  try{
    $database_handler = new PDO('mysql:host=db;daname=simple_memo;charset=utf8mb4', 'root', 'password');
  }
  catch(PDOExeption $e)
  {
    echo "DB接続に失敗しました。 <br/>";
    echo $e->getMessage();
    exit;
  }
  return $database_handler;
}