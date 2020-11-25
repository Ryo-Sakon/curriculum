<?php 
function connect(){
    $username = 'root';
    $password = 'root';
    try {
        $pdo = new PDO("mysql:dbname=checktest4;host=localhost", $username, $password);
        echo "接続できました";
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
}
?>