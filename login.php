<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户注册</title>
    <!-- 框架scc样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstValidator的css样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/regLogin.min.css">
    <!-- 引入登陆页面样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- 头部 -->
    <?php
      require_once("./topNav.php");
    ?>
    <nav class="navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header clearfix">
      <a class="navbar-brand" href="#"><img src="./images/logo.png"></a>
      <p class="pull-left">用户登陆</p>
    </div>
  
</nav>
    <div class="panel panel-default container">
    <div class="panel-heading">
        <h3 class="panel-title">用户登陆</h3>
    </div>
    <div class="panel-body">
    <form id="loginForm" class="form-horizontal">
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
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">登陆</button>
      <a href="./register.php" class="hideTitle">新用户，马上注册</a>
    </div>
  </div>
</form>
        </div>
    </div>
    </div>
    </div>
  </div><!-- /.container-fluid -->
    <!-- 页脚 -->
    <?php
      require_once("./footer.php")
    ?>
    <!-- 模态框 -->
    <!-- 蒙层的html结构 -->
    <div class="modal fade" id="msgShowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="msgShowTitle">标题</h4>
        </div>
        <div class="modal-body" id="msgShowContent">
            内容
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
        </div>
        </div>
    </div>
    </div>
    <!-- jquery样式 -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 框架js文件 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入bootstrapValidator的js库 -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <script src="./js/p2p.js"></script>
    <!-- 表单验证的js文件 -->
    <script src="./dist/js/formcheck.min.js"></script>
</body>
</html> 