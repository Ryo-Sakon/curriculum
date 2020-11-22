<?php 
$dbName="webtube_db";
$host="localhost";
$dsn = 'mysql:dbname=$dbName;host=$host;charset=utf8mb4';
$username = 'root';
$password = 'password';あとで確認
try {
    $pdo=new PDO($dsn,$username,$password);
    
} catch (\Throwable $th) {
    //throw $th;
}

?>


<!-- php data objects -->
PDOはmysqlだけじゃなく、どのDBにも使える
＄dsnはデータベースの詳細
tryは処理でエラーが発生したら、catchを出力sるう