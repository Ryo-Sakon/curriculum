<head>
<link rel="stylesheet" href="style.css">
</head>

<?php 
    $name = $_POST['my_name']; 
    $answer1 = $_POST['port_number']; 
    $answer2 = $_POST['language']; 
    $answer3 = $_POST['command']; 
?>

<p><?=$name?>さんの結果は・・？</p>
<p>①の答え</p>
<p><?php
    if ($answer1 == "80") {
        echo "正解！";
    }else {
        echo "残念・・・";
    }
?>
</p>
<p>②の答え</p>
<p><?php
    if ($answer2 == "PHP") {
        echo "正解！";
    }else {
        echo "残念・・・";
    }
?>
</p>
<p>③の答え</p>
<p><?php
    if ($answer3 == "select") {
        echo "正解！";
    }else {
        echo "残念・・・";
    }
?>
</p>