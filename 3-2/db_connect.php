<?php
    define('DB_DATABASE', 'YIGroupBlog');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    
    function db_connect() {
        try {
            // PDOインスタンスの作成
            $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
            // エラー処理方法の設定
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }
?>

<!-- グローバル定数define?グローバルの範囲がわからない -->
<!-- Strictは厳格に 同姓同名を考慮。２つ以上のカラムで初めてレコードを
特定できる。それを指定するのが主キー（PrimaryKey・PK）、候補キー
例：球団名＋背番号：複合キー。主キーは１つ必ず定めなくてはならない
人工キー（サロゲートキー）・自然キーがある。tinyint=8bit
性別は国際規格あり。男１女２-->
<!-- php -->