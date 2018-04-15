<?php
    include "config.php";
    header("content-type:text/html;charset=utf-8");
    $id=$_GET['id'];
    $sql="delete from user where id={$id}";
    if(mysql_query($sql))

    echo "<script>location='index.php'</script>";
?>