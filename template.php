<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <!-- 框架scc样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
</head>
<body>
    <!-- 头部 -->
    <?php
      require_once("./header.php")
    ?>
    <div class="container" id="box">
        <h1>我阿里</h1>
    </div>
    <!-- 页脚 -->
    <?php
      require_once("./footer.php")
    ?>
    <!-- jquery样式 -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 框架js文件 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="./js/p2p.js"></script>
</body>
</html>