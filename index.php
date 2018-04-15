<?php
    include 'config.php';
    $sql="select * from user order by id";
    $rst=mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>index</title>
</head>
<body>
<center>
    <h3>查看用户 | <a href="add.php">添加用户</a></h3>
    <a href=""></a>
    <hr>
    <table width="500" border="1" cellspacing="0" >
        <tr>
            <th>用户ID</th>
            <th>用户</th>
            <th>密码</th>
            <th>注册时间</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
    <?php
        while($row=mysql_fetch_assoc($rst)){
            echo "<tr align='center'>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>{$row['password']}</td>";
            echo "<td>".date('Y-m-d H:i:s',$row['time'])."</td>";
            echo "<td><a href='edit.php?id={$row['id']}'>编辑</a></td>";
            echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
</center>
</body>
</html>