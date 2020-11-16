<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 実行したいSQL文を準備
// 今回はusersテーブルにレコードを追加
$sql = "INSERT INTO users (name, password) VALUES ('Taro Yamada', 'taro')";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

// stmt＝statement言葉 execute=命令を実行
// 要するに、ターミナルやphpmyadminで行う内容をphp上で行っている。
// $sqlがテーブルに対するCRUD操作。db_connectでデータベースの選択
// なぜphpで行うかは、おそらくweb上のフォームの値をデータベースに対して
// insertするためであろう。