<table border="1">
<tr><th>名前</th><th>価格</th></tr>
<?php
    try {
        $pdo = new PDO("mysql:dbname=men", "root","root");
        $st = $pdo->query("SELECT * FROM udon");
        while ($row = $st->fetch()) {
            $name = $row['name'];
            $price = $row['price'];
            echo "<tr><td>$name</td><td>$price 円</td></tr>";
        }
    }catch (PDOException $e) {
        echo $e->getMessage();
        echo "エラーです";
    }
?>
</table>

<!--
使用するDBは$pdoです
$pdoへの要求は$stです。型は
$rowはfetchにより取得されたDB中の最初のレコードです。
$nameは$rowのうち、'name'のカラムの値です。'name'はひらがなもありです。

-->