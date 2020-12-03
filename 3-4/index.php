<?php
require_once('getData.php');
require_once('pdo.php');
$YIGroupBlog=new getData();
// $pdo = new PDO("mysql:dbname=checktest4;host=localhost","root","root");
// $getposts_sql = "SELECT * FROM posts ORDER BY id desc";
// $post_data = $pdo->query($getposts_sql);

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
            <p>ようこそ<?php echo $YIGroupBlog->getUserData()['last_name'].$YIGroupBlog->getUserData()['first_name'] ?>さん</p>
            <p>最終ログイン日</p>
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
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['content']; ?></td>
                <td><?php echo $row['time']; ?></td>
            </tr>
        <?php } 
        // while ($row->fetch())/*($row=$post_data->fetch())*/ { 
        //     $id = $row['id'];
        //     $title = $row['title'];
        //     $category_no = $row['category_no'];
        //     $comment = $row['comment'];
        //     $created = $row['created'];
   
        //     echo "<tr><td>$id</td><td>$title</td><td>$category_no</td><td>$comment</td><td>$created</td></tr>";
        // }
        ?>
        </table>
    </div>
    <footer>Y&I group.inc</footer>
</body>
</html>