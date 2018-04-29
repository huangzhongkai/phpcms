<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" href="<?php echo BS_PATH ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BS_PATH ?>js/jquery.min.js">
    <link rel="stylesheet" href="<?php echo BS_PATH ?>js/bootstrap.js">
</head>
<body>
<div class="container">
    <hr>
    <form action="?m=test&c=test&a=update&pc_hash=<?php echo $pc_hash?>" method="post">
        <!--        <div class="form-group">-->
        <!--            <label>用户ID:</label>-->
        <!--            <input name="id" readonly = "readonly" value="--><?php //echo $row["id"]?><!--" class="form-control" >-->
        <!--        </div>-->

        <div class="form-group">
            <label>用户名:</label>
            <input type="text" name="username" value="<?php echo $row["username"]?>" class="form-control" >
        </div>
        <div class="form-group">
            <label>密码:</label>
            <input type="text" name="password" value="<?php echo $row["password"]?>" class="form-control" >
        </div>
        <input name="id" type="hidden" value="<?php echo $row["id"]?>" class="form-control" >

        <div class="form-group">
            <input type="submit" value="更新" class="btn btn-primary">
        </div>
    </form>
</div>
</body>
</html>
