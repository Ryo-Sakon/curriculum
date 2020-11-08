<?php
    $x = 3.65;
    echo ceil($x); 
    echo "<br>";
    echo floor($x);
    echo "<br>";
    echo round($x); 
    echo "<br>";
    echo pi();
    echo "<br>";
    echo mt_rand(1,5);
    echo "<br>";
    $str = "government";
    echo strlen($str);
    echo "<br>";
    echo strpos($str,"r");
    echo "<br>";
    echo substr($str,-3,3);
    echo "<br>";
    echo str_replace("g","G",$str);
    echo "<br>";
    $player_name = "本田圭佑";
    $birthMonth= 6;
    $birthDay= 13;
    $age= 34;
    printf("続いて%s選手の紹介です。生年月日は%02d月%0d日で、現在%2d歳です。",$player_name,$birthMonth,$birthDay,$age);
    echo "<br>";
    $birthDay_profile=sprintf("続いて%s選手の紹介です。生年月日は%02d月%0d日で、現在%2d歳です。",$player_name,$birthMonth,$birthDay,$age);
    echo $birthDay_profile;
    echo "<br>";
?>


<!-- ＜IT用語説明＞ 
・PostgreSQL・Oracle SQL：データベース言語の種類。


・TortoiseGit・TortoiseSVN：SVNはGitと似たバージョン管理システムであるが、
これらはGitHubと異なり、集中型であり、リポジトリが１つしかない。
常に共同開発者の変更点が同期されるため、同じファイルを同時に変更した際に
コンフリクトが発生することがある。分散型は個別のローカルリポジトリがありその中で
編集ができるため、気軽に変更ができ、またその変更をリモートリポジトリに反映
させるかも、自由に決定できる。そのためブランチとマージが非常に使いやすい。
またTortoiseGitは、本来CUIで操作しなくてはならないGitをGUIで操作できるようにしたWindowsソフト。
※ブラウザ版GitやGit DesktopがすでにGUIなので、いまいち利点はわからなかった。

・外部設計・内部設計：基本設計・詳細設計のこと。

-->
