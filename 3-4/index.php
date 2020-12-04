<?php
require_once('getData.php');
require_once('pdo.php');
$checkTest4=new getData();

?> 
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="header-left">
            <img src="img/yigrouplogo.png">
        </div>
        <div class="header-right">
            <p style="background-color:#87ceeb">ようこそ<?php echo $checkTest4->getUserData()['last_name'].$checkTest4->getUserData()['first_name'] ?>さん</p>
            <p style="background-color:#00ffff">最終ログイン日：<?php echo $checkTest4->getUserData()['last_login'] ?>
            </p>
        </div>
    </header>
    <div class="main">
        <table>
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php 
        $st=$checkTest4->getPostData();
        while ($row=$st->fetch(PDO::FETCH_ASSOC)) {
            $id = htmlspecialchars($row['id']);
            $title = htmlspecialchars($row['title']);
            $category_no = htmlspecialchars($row['category_no']);
            $comment = htmlspecialchars($row['comment']);
            $created = htmlspecialchars($row['created']);
   
            echo "<tr><td>$id</td><td>$title</td><td>$category_no</td><td>$comment</td><td>$created</td></tr>";
        }
        ?>
        </table>
    </div>
    <footer>Y&I group.inc</footer>
</body>
</html>