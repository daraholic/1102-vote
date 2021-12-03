<?php include_once "./api/db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷系統</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
      .container{
        min-height: 544px;
      }

    </style>
</head>
<body>

<div class="jumbotron p-0 mb-0" style="overflow:hidden;height:250px">
<a href="index.php">
<div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-ride="carousel">
  <div class="carousel-inner position-absolute" style="top:-250px">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="./image/dessert-01.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/dessert-07.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/dessert-06.jpg" alt="Third slide">
    </div>
  </div>
</div>
</a>
</div>
<nav class='bg-light shadow py-3 px-2 d-flex justify-content-between mb-4'>
<div>&nbsp;</div>
<?php 

if(isset($_SESSION['error'])){
  echo "<span class='text-danger'>".$_SESSION['error']."</span>";
}

if(isset($_SESSION['user'])){
  echo "<span class='pr-5'>歡迎！{$_SESSION['user']}</span>";
?>
<div>
  <a class="btn btn-sm btn-primary mx-1" href="logout.php">登出</a>
</div>

<?php

}else{
?>
<div>
  <a class="btn btn-sm btn-primary mx-1" href="?do=login">會員登入</a>
  <a class="btn btn-sm btn-info mx-1" href="?do=reg">註冊新會員</a>
</div>
<?php
}
?>
</nav>
<div class="container">
<?php

$do=(isset($_GET['do']))?$_GET['do']:'show_vote_list';
$file="./frontend/".$do.".php";
if(file_exists($file)){
    include $file;
}else{
    include "./frontend/show_vote_list.php";
}
?>
</div>
<div class="p-3 text-center text-light bg-primary">mack版權所有、歡迎盜用</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>