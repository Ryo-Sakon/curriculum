<?php
    $particle = ["electron","proton","neutron"];
    echo count($particle);
    echo "<br>";
    sort($particle);   //文字の長い順に//
    var_dump($particle);
    echo "<br>";
    if (in_array("electron",$particle)) {
        echo "電子です";
    } else {
        echo "原子核の粒子です";
    }
    echo "<br>";
    $atom = implode("@",$particle);
    echo $atom;
    echo "<br>";
    $elemental = explode("@",$atom);
    var_dump($elemental);
    echo "<br>";
?>


<!-- ＜IT用語説明＞ 
・要件定義(要求仕様書)：クライアントの要望から、実装すべき機能を明確にすること。

・単体テスト・結合テスト：単体テストはモジュールごとのテスト。結合テストはシステム全体のテスト。
この後、周辺機器のテストも含めて行うものを総合テストという。
・テスト仕様書(どのようなもの、項目)：大項目、中項目、小項目、前提条件、操作方法など。

-->
