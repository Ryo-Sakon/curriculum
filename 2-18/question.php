<?php $name = $_POST['my_name']; ?>
<p>お疲れ様です<?php echo $name ?>さん</p>

<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<?php 
  $port_number = [80,22,20,21];
  foreach ($port_number as $value) {?>
  <input type="radio" name="port_number" value="<?php $value?>"><?php echo $value; } ?>    
  <h2>②Webページを作成するための言語は？</h2>
<?php 
  $port_number = ["PHP","Python","JAVA","HTML"];
  foreach ($port_number as $value) {?>
  <input type="radio" name="language" value="<?php $value?>"><?php echo $value; } ?>    
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php 
  $port_number = ["join","select","insert","update"];
  foreach ($port_number as $value) {?>
  <input type="radio" name="command" value="<?php $value?>"><?php echo $value; } ?>
  <br>
  <input type="hidden" name="my_name" value="$name">
  <input type="submit" value="回答する">

</form>