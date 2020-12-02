<?php
require_once("db_connect.php");
try {
    $st = $pdo->prepare("INSERT INTO users VALUES(?,?)");
    $st->execute(array($_POST['name'],$_POST['password']));
    echo "OK";
}catch(PDOException $e){
    echo $e;
    die;
}?>

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