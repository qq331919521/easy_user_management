<?php
    include "config.php";
    header("content-type:text/html;charset=utf-8");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    $sql="update user set username='{$username}',password='{$password}' where id={$id}";
    if(mysql_query($sql)){
        echo "<script>alert('修改成功！')</script>";
        echo "<script>location='index.php'</script>";
    }
    else
    {
        echo "<script>alert('修改失败！')</script>";
        echo "<script>location='edit.php'</script>";
    }

?>