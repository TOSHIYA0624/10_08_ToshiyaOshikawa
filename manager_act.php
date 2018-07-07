<?php
session_start();
include("funcs.php");

//POSTデータ
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//DB接続
$pdo = db_connect();

//データ登録SQL
$spl = "SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw";
$stmt = $pdo->prepare($spl);
$stmt->bindValue(':lid',$lid);
$stmt->bindValue(':lpw',$lpw);
$res = $stmt->execute();

//SQL実行時エラー
QueryError($res,$stmt);

//抽出データ数を取得
$val = $stmt->fetch();

//該当レコードがあればSESSIONに値を代入
if($val["lid"] != ""){
  $_SESSION["chk_ssid"] = session_id();
  $_SESSION["lid"]= $val["lid"];
  $_SESSION["lpw"]= $val["lpw"];
  $_SESSION["life_flg"]= $val["life_flg"];
  $_SESSION["name"] = $val["name"];
  $_SESSION["kanri_flg"] = $val["kanri_flg"];
  header("Location: manager.php");
}else{
  header("Location: index.php");
}
exit();
?>