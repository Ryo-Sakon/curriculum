<?php
// db_connect.phpの読み込み
FILL_IN

// function.phpの読み込み
FILL_IN

// ログインしていなければ、login.phpにリダイレクト
FILL_IN

// URLの?以降で渡されるIDをキャッチ
$id = $_GET['id'];
// もし、$idが空であったらmain.phpにリダイレクト
// 不正なアクセス対策
if (empty($id)) {
    header("Location: main.php");
    exit;
}

// PDOのインスタンスを取得
FILL_IN

try {
    // SQL文の準備
    FILL_IN
    // プリペアドステートメントの作成
    FILL_IN
    // idのバインド
    FILL_IN
    // 実行
    FILL_IN
    // main.phpにリダイレクト
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    // エラーメッセージの出力
    FILL_IN
    // 終了
    FILL_IN
}