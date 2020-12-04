<?php 
function connect(){
    $username = 'root';
    $password = 'root';
    try {
        $pdo = new PDO("mysql:dbname=checktest4;host=localhost", $username, $password);

    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
    return $pdo;
}

//echo connect();
//dbhとpdoの違いは気にしない
//

// class PDO(){
//     function query(){

//     }
//     function fetch(){

//     }

?>

