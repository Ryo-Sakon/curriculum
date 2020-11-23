<?php 
function connect(){
    $dbName="checktest4";
    $host="localhost";
    $dsn = sprintf('mysql:dbname=%s;host=%s;charset=utf8mb4', $dbName, $host);
    $username = 'root';
    $password = 'root';
    try {
        $dbh=new PDO($dsn, $username, $password);
        echo "接続できました";
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
}
?>