<?php
try {
  // The content of the PDOelement is PDO('dbname; host; charset', 'username', 'password')
  $db = new PDO('mysql:dbname=id10524163_futurehacku; host=localhost; charset = utf8', 'id10524163_futurehacku', 'awstsukaenai');
} catch (PDOException $e) {
  echo 'DB接続エラー: ' . $e -> getMessage();
}
 ?>
