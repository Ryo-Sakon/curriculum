<?php
require_once('getData.php');
require_once('pdo.php');
$YIGroupBlog=new getData($pdo);
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
            <p>ようこそ<?php echo $YIGroupBlog->getUserData() ?>さん</p>
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
        <?php echo $YIGroupBlog->getPostData() ?>
        </table>
    </div>
    <footer>Y&I group.inc</footer>
</body>
</html>