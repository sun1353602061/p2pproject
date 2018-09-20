<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户注册</title>
    <!-- 框架scc样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/regLogin.min.css">
</head>
<body>
    <?php
      require_once("./topNav.php");
    ?>
    <nav class="navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header clearfix">
      <a class="navbar-brand" href="#"><img src="./images/logo.png"></a>
      <p class="pull-left">用户注册</p>
    </div>
</nav>
    <div class="panel panel-default container">
    <div class="panel-heading">
        <h3 class="panel-title">用户注册</h3>
    </div>
    <div class="panel-body">
    <form id="regForm" class="form-horizontal" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">用户名:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="username"placeholder="请输入用户名">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">密码:</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" name="Password" placeholder="请输入密码">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">确认密码:</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" name="repeatPassword" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">手机号码:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="mobile" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">电子邮件:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="email" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-success col-sm-offset-3">确认注册</button>
          </div>
        </div>
        </form>
        </div>
    </div>
    </div>
    <!-- 页脚 -->
    <?php
      require_once("./footer.php")
    ?>
    <!-- jquery样式 -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 框架js文件 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入bootstrapValidator的js库 -->
    <script src="./dist/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入自定义效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 表单验证的js文件 --> 
    <script src="./dist/js/formcheck.min.js"></script>
</body>
</html>