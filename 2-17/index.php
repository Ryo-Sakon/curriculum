<?php
    $counts = 0;
    $sum = 0;
    while ($sum < 40) {
        $counts++;
        $num = mt_rand(1,6);
        $sum += $num;
        echo "{$counts}回目＝{$num}";
        echo "<br>";
    }
    echo "{$counts}回目でゴールしました";

    echo "<br><br><br>";

    echo "今".date("H")."時台です";
    echo "<br>";
    $date = date("H");
    if ($date >= 4 && $date < 10) {
        echo "おはようございます";
        
    }elseif ($date >= 10 && $date < 18) {
        echo "こんにちは";
    }else{
        echo "こんばんは";
    }
?>