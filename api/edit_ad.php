<?php include_once "db.php";

$ad=find("ad",$_POST['id']);

if(!empty($_FILES['name']['tmp_name'])){
    $filename=$_FILES['name']['name'];

    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);
}
$intro=$_POST['intro'];

if(isset($filename)){
    update('ad',['name'=>$filename,'intro'=>$intro],['id'=>$_POST['id']]);
}else{
    update('ad',['intro'=>$intro],['id'=>$_POST['id']]);
}
to("../backend/?do=ad");