<?php
require_once("db_connect.php");
// POSTで送られていれば処理実行
if (!empty($_POST["name"]) && !empty($_POST["password"])) {
    $pdo=db_connect();
    try {
        // SQL文の準備 FILL_IN
        // パスワードをハッシュ化
        //password_hash($password , $algo , $options)password_verify ( $password , $hash )
        // プリペアドステートメントの作成 FILL_IN
        // 値をセットFILL_IN
        // 実行 FILL_IN
        $st = $pdo->prepare("INSERT INTO users(name,password) VALUES(:name,:password)");
        $st->execute(array(':name' => $_POST['name'],':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)));
        echo "OK";
    } catch (PDOException $e) {
        echo $e;
        die();
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
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>