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
    <hr>
    <form action="?m=test&c=test&a=insert&pc_hash=<?php echo $pc_hash?>" method="post">
        <div class="form-group">
            <label>用户名:</label>
            <input type="text" name="username" class="form-control" placeholder="username">
        </div>
        <div class="form-group">
            <label>密码:</label>
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
            <input type="submit" value="添加" class="btn btn-primary">
        </div>
    </form>
</div>
</body>
</html>
