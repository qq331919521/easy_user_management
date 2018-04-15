<?php
    include 'config.php';
    $id=$_GET['id'];
    $sql="select * from user where id={$id}";
    $rst=mysql_query($sql);
    $row=mysql_fetch_assoc($rst);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>add</title>
</head>
<body>
<center>
    <h3>修改用户</h3>
    <hr>
    <form action="update.php" method='post'>
        用户名:<input type="text" name="username" value='<?php echo $row['username']?>'><br>
        密&nbsp;&nbsp;&nbsp;码:<input type="text" name="password" value='<?php echo $row['password']?>'><br>
        <input type="hidden" name="id" value="<?php echo $id ?>" />
        <input type="submit" value="提交">
    </form>
</center>
</body>
</html>