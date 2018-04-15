<?php
    include "config.php";
    header("content-type:text/html;charset=utf-8");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $time=time();
    $sql="insert into user(username,password,time) values ('$username','$password',{$time})";
    if(mysql_query($sql)){
        echo "<script>alert('添加成功！')</script>";
        echo "<script>location='index.php'</script>";
    }
    else
    {
        echo "<script>alert('添加失败！')</script>";
        echo "<script>location='add.php'</script>";
    }

?>