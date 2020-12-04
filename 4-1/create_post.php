<?php
// db_connect.phpの読み込み
FILL_IN

// function.phpの読み込み
FILL_IN

// ログインしていなければ、login.phpにリダイレクト
FILL_IN

// 提出ボタンが押された場合
if (FILL_IN) {
    // titleとcontentの入力チェック
    if (FILL_IN) {
        echo 'タイトルが未入力です。';
    } elseif (FILL_IN) {
        echo 'コンテンツが未入力です。';
    }

    if (FILL_IN) {
        // 入力したtitleとcontentを格納
        FILL_IN

        // PDOのインスタンスを取得
        FILL_IN

        try {
            // SQL文の準備
            FILL_IN
            // プリペアドステートメントの準備
            FILL_IN
            // タイトルをバインド
            FILL_IN
            // 本文をバインド
            FILL_IN
            // 実行
            FILL_IN
            // main.phpにリダイレクト
            FILL_IN
        } catch (PDOException $e) {
            // エラーメッセージの出力
            FILL_IN
            // 終了
            FILL_IN
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>記事登録</h1>
    <form method="POST" action="">
        title:<br>
        <input type="text" name="title" id="title" style="width:200px;height:50px;">
        <br>
        content:<br>
        <input type="text" name="content" id="content" style="width:200px;height:100px;"><br>
        <input type="submit" value="submit" id="post" name="post">
    </form>
</body>
</html>