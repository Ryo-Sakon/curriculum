<form action="result.php" method="post">
  お名前：
    <input type="text" name="my_name" />
  <br>
  ご希望商品：
    <input type="radio" name="prize" value="A賞"/>A賞
    <input type="radio" name="prize" value="B賞"/>B賞
    <input type="radio" name="prize" value="C賞"/>C賞
  <br>
  個数：
  <select name="numberOfItems">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
  <input type="submit" value="送信" />
</form>

<!-- IT用語説明
・モジュール：プログラム内部における、１機能を構成する部分のこと、
・バージョン管理システム：Gitなど、バージョンを更新する際に過去の
バージョンも含めて保存しておくシステムのこと。

・サブクエリ：データベースのテーブルから取り出した特定のデータに対するSQL文。

-->