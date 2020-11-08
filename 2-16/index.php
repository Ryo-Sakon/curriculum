<?php
    $testFile = "test.txt";
    $contents = "こんにちは！";
    if (is_writable($testFile)) {
        $fp = fopen($testFile, "a");
        fwrite($fp, $contents);
        fclose($fp);
        echo "finish writing!!";
    } else {
        echo "not writable!";
        exit;
    }
    echo "<br>";
    $test_file = "test2.txt";
    if (is_readable($test_file)) {
        $fp = fopen($test_file,"r");
        while($line = fgets($fp)){
            echo $line.'<br>';
        }
        fclose($fp);
    }else{
        echo "not readable!";
        exit;
    }
?>


<!-- ＜IT用語説明＞ 
1. CakePHPの2系・3系の違い：フォルダ構成、記述方法の一部変更
2. LAMP:Linux,Apache,MySQL,PHPの４つをさす、開発環境に使われるソフト群。
3. AWS：ITビジネスを行う際に必要となるサーバーなどのハードウェア、ソフトウェアをレンタル
できるサービス。特に顧客情報を管理する上で高度なセキュリティ対策を自社で持つのは
初期コストが高く、安全面のメリットから導入する企業が多い。

 -->
