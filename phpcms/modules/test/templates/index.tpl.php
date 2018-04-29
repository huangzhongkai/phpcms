<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="<?php echo BS_PATH ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BS_PATH ?>js/jquery.min.js">
    <link rel="stylesheet" href="<?php echo BS_PATH ?>js/bootstrap.js">
</head>
<body>
<div class="container">
    <h3>
        <a href="" class="btn btn-default">查看用户</a>
        <a href="?m=test&c=test&a=add&pc_hash=<?php echo $pc_hash?>" class="btn btn-primary">添加用户</a>
    </h3>
    <table class="table table-striped">
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>修改</th>
        <th>删除</th>
        <?php
        foreach ($rows as $row){
            echo "<tr>";
            echo "<td>{$row[id]}</td>";
            echo "<td>{$row[username]}</td>";
            echo "<td>{$row[password]}</td>";
            echo "<td><a href='?m=test&c=test&a=edit&id={$row[id]}&pc_hash={$pc_hash}'>修改</a></td>";
            echo "<td><a onclick='return confirm(\"确认删除吗？\")' href='?m=test&c=test&a=delete&id={$row[id]}&pc_hash={$pc_hash}'>删除</a></td>";
            echo "<tr>";
        }
        ?>
    </table>
</div>
</body>
</html>