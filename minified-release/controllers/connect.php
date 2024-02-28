<?php
$host='localhost'; //имя хоста, на локальном компьютере это localhost
$user='root'; //имя пользователя, по умолчанию это root
$password=''; //пароль, по умолчанию пустой
$db_name='AutoPark'; //имя базы данных
$link=mysqli_connect($host, $user, $password, $db_name);
mysqli_query($link, "SET NAMES 'utf8'");
$query="SELECT * FROM catalog";
$result=mysqli_query($link, $query) or die(mysqli_error($link));
for ($data=[]; $row=mysqli_fetch_assoc($result); $data[]=$row);
$result='';
?>;