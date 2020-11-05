<?PHP
    $num = 1;
    while ($num < 100) {
        if ($num % 3 == 0 && $num % 5 != 0) {
            echo "Fizz!!";
        } elseif ($num % 3 != 0 && $num % 5 == 0) {
            echo "Buzz!!";
        } elseif ($num % 3 == 0 && $num % 5 == 0) {
            echo "FizzBuzz!!";
        }else{
            echo $num;
        }
        echo "<br>";
        $num++;
    }
?>

<!-- <?PHP
    $num = 1;
    while ($num < 100) {
        if ($num % 3 == 0) {
            echo "Fizz!!";
        } 
        if ($num % 5 == 0) {
            echo "Buzz!!";
        } 
        if ($num % 3 != 0 && $num % 5 != 0) {
            echo $num;
        }
        echo "<br>";
        $num++;
    }


?> -->

<!-- ＜IT用語説明＞ 
・パフォーマンス：性能のこと。動作のクオリティ。

・スロークエリ：SQLのクエリ処理に時間がかかってしまうこと。何秒で「遅い」と
みなすかは設定可能。※原因は様々あるが、自分で調べてもよくわからなかった。
SQLの勉強が必要と思われる。


・クエリログ：クエリの実行内容の記録。スロークエリを発見するためなどに使う。
※実際の用途の具体例は自分で調べてもよくわからなかった。SQLの勉強が必要と
思われる。
-->