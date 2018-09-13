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
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>
<body>
    <!-- 头部 -->
    <?php
      require_once("./heater.php")
    ?>
  <!-- 导航 -->
<nav class="navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="./images/logo.png"></a>
    </div>

   
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">首页</a></li>
        <li><a href="#">我要投资</a></li>
        <li><a href="#">我要借款</a></li>
        <li><a href="#">个人中心</a></li>
        <li><a href="#">新手指引</a></li>
        <li><a href="#">关于我们</a></li>
      </ul>
  </div><!-- /.container-fluid -->
</nav>
    <!-- 轮播 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/banner01.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="./images/banner02.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- 特色 --> 
    <div class="container" id="feature">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <h2>投资理财</h2>
            <p>稳定投资、高收益、短期限，易融贷先行赔付</p>
          </div>
          <div class="col-sm-4 col-xs-12">
            <h2>投资理财</h2>
            <p>稳定投资、高收益、短期限，易融贷先行赔付</p>
          </div>
          <div class="col-sm-4 col-xs-12">
          <h2>投资理财</h2>
          <p>稳定投资、高收益、短期限，易融贷先行赔付</p>
          </div>
        </div>
    </div>
    <!-- 信息 -->
    <div class="container">
      <div class="panel panel-default">
        <!--列表 -->
        <div class="panel-heading clearfix">
          <h2 class="pull-left">进行中借贷</h2>
          <a href="#" class="pull-right">进入投资列表</a>
        </div>
        <!-- Table -->
        <div class="bs-example" data-example-id="hoverable-table">
       <table class="table table-hover">
              <thead>
                <tr>
                  <th>借款人</th>
                  <th class="hideTitle">借款标题</th>
                  <th>年利率</th>
                  <th>金额</th>
                  <th class="hideTitle">还款方式</th>
                  <th>进度</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>张三</td>
                  <td class="hideTitle">给我2000度过难关</td>
                  <td>10.00%</td>
                  <td>2,000.00</td>
                  <td class="hideTitle">按月分期还款</td>
                  <td>78.00%</td>
                  <td><button type="button" class="btn btn-danger btn-xs">查看</button></td>
                </tr>
                <tr>
                  <td>王五</td>
                  <td class="hideTitle">江湖救急，借100吃饭	</td>
                  <td>12.00%</td>
                  <td>100.00</td>
                  <td class="hideTitle">按月到期还款</td>
                  <td>100.00%</td>
                  <td><button type="button" class="btn btn-danger btn-xs">查看</button></td>
                </tr>
                <tr>
                    <td>王五</td>
                    <td class="hideTitle">江湖救急，借100吃饭	</td>
                    <td>12.00%</td>
                    <td>100.00</td>
                    <td class="hideTitle">按月到期还款</td>
                    <td>100.00%</td>
                    <td><button type="button" class="btn btn-danger btn-xs">查看</button></td>
                  </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
    <!-- 新闻 -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">进行中借贷</h2>
                    <a href="#" class="pull-right">更多>></a>
                </div>
                <div class="panel-body">
                    <ul>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
              </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">用户反馈</h2>
                    <a href="#" class="pull-right">更多>></a>
                </div>
                <div class="panel-body">
                    <ul>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
              </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">理财经验</h2>
                    <a href="#" class="pull-right">更多>></a>
                </div>
                <div class="panel-body">
                    <ul>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
              </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">活动分享</h2>
                    <a href="#" class="pull-right">更多>></a>
                </div>
                <div class="panel-body">
                    <ul>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
              </div>
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

    <script src="./js/p2p.js"></script>
</body>
</html>