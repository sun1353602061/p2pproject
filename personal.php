<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <!-- 框架scc样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    
    <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 验证用户身份是否合法 -->
    <!-- <script src="./dist/js/userStateCheck.min.js"></script> -->
</head>
<body>
    <!-- 引入头部信息 -->
    <?php
       require_once("header.php");
    ?>
    <!-- 模板的内容开始 -->
    <div class="container" id="personal">
        <div class="row">
            <?php
              require_once("./ledtnav.php");
            ?>
            <!-- 右侧的内容 -->
            <div class="col-md-9 col-xs-12" id="mainContent">
            <button type="button" class="btn btn-primary btn-xs" id="btnOnOff">隐藏</button>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- 1 -->
                        <div class="row" id="userHeader">
                            <div class="col-sm-2 col-xs-12" id="userHeaderLeft">
                                <img src="./images/head_icon.jpg" class="img-thumbnail">
                            </div>
                            <div class="col-sm-10 col-xs-12">
                                <p>昵 称：源代码教育</p>
                                <p>用户名：小强</p>
                                <p>最后登录时间：2016-10-25 15:30:10</p>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="row" id="money">
                           <div class="col-md-4 col-sm-12">总金额：<span>10000元</span></div>
                           <div class="col-md-4 col-sm-12">可用金额：<span>8000元</span></div>
                           <div class="col-md-4 col-sm-12">冻结金额：<span>2000元</span></div>
                        </div>
                        <!-- 3 -->
                        <div id="myButton">
                            <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账户提现</button>
                        </div>
                        <div class="el-account-info">
								<div class="row">
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="pull-left">
												<img src="images/shiming.png">
											</div>
											<div class="pull-left">
												<h5>实名认证</h5>
												<p>
                                                    未认证
                                                    <a href="realAuth.html">马上认证</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">实名认证之后才能在平台投资</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="pull-left">
												<img src="images/shouji.jpg">
											</div>
											<div class="pull-left">
												<h5>手机认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">可以收到系统操作信息,并增加使用安全性</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="pull-left">
												<img src="images/youxiang.jpg">
											</div>
											<div class="pull-left">
												<h5>邮箱认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">您可以设置邮箱来接收重要信息</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="pull-left">
												<img src="images/baozhan.jpg">
											</div>
											<div class="pull-left">
												<h5>VIP会员</h5>
												<p>
													普通用户
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">VIP会员，让你更快捷的投资</p>
										</div>
									</div>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 引入页脚 -->
    <?php
       require_once("./footer.php");
    ?>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入自定义的效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 个人中心的交互特效 -->
    <script src="./dist/js/personal.min.js"></script>
</body>
</html>