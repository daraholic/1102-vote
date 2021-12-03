<?php include_once "db.php";

$image=find('ad',$_GET['id']);
unlink("../image/".$image['name']);
del('ad',$_GET['id']);
to('../backend/?do=ad');
?>