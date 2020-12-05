<?php

class getData{
    public $pdo;
    //コンストラクタ
    function __construct()  {
        $this->pdo = connect();
        //値をreturnで返す
    }
    /**
     * ユーザ情報の取得
     *
     * @param パラメーター　何をしているのか
     * @return array $users_data ユーザ情報（表しているもの）
     */
    public function getUserData(){
        $getusers_sql = "SELECT * FROM users limit 1";
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        return $users_data;
    }
    //pdoはインスタンス  ::は  fetch（配列の形式）、配列の形式で取り出すという日本語（方法）は配列形式のデータを取り出す、とにかく必要だというルール
    //executeにすると、書いた瞬間に実行されるSQLinjectionという攻撃を避ける
    //1=1;必ずTRUEになってしまう、一旦文字列にしてしまう バインドバリュー、バインドぱらむ
    //::はクラスのスコープ定義演算子 このクラスにおける
    /**
     * 記事情報の取得
     *
     * @param 
     * @return object $post_data 記事情報
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