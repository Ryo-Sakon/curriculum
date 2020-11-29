<?php

class getData{
    public $pdo;
    //コンストラクタ
    function __construct()  {
        $this->pdo = connect();
    }
    /**
     * ユーザ情報の取得
     *
     * @param 
     * @return array $users_data ユーザ情報
     */
    public function getUserData(){
        $getusers_sql = "SELECT * FROM users limit 1";
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        return $users_data;
    }
    
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    public function getPostData(){
        $getposts_sql = "SELECT * FROM posts ORDER BY id desc";
        $post_data = $this->pdo->query($getposts_sql);
        return $post_data;
    }
}

/*コネクト関数とは、DBに接続することを指します。
pdo.phpを参照します。
getDataクラスとは、次のようなものです。
①データベースの種類pdoがある ②データベース内のデータ の２つのプロパティの定義がある
コンストラクタに書かれている内容により、$pdoは、コネクト関数を実行することである

getUserData関数は、そのデータベースにおけるusersテーブルの値を１つだけreturnしたものである。int型
getPostData関数は、そのデータベースにおけるpostsテーブルの値をid順に全て* returnしたものである。int型
なぜクラスの中に書かれているのかは、データベース名$pdoとデータ$dataをその都度指定する必要があるため。
*/