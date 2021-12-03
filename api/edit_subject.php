<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 * 
 */

$topic=$_POST['topic'];
$topic_id=$_POST['topic_id'];

update('topics',['topic'=>$topic],['id'=>$topic_id]);

$options=$_POST['options'];
$opt_id=$_POST['opt_id'];
foreach ($options as $key => $opt) {
    //判斷選項是否有內容，有則更新，無則刪除
    if($opt!=""){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
    }else{
        del('options',$opt_id[$key]);
    }
}
to("../backend/index.php")

?>