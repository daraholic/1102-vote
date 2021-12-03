<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 */

$topic=['topic'=>$_POST['subject']];
insert('topics',$topic);

to("../backend");

?>