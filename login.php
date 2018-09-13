<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- 顶部导航 -->
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">首页</a></li>
                <li><a href="#">登录</a></li>
                <li><a href="#">快速注册</a></li>
                <li><a href="#">帮助</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- 页脚 -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <p>专业Java培训、PHP培训、UI培训、iOS培训、高级Web前端培训机构</p>
                <p>版权所有： 2006-2015成都源代码教育咨询有限公司</p>
                <p>地  址： 成都市高新区府城大道西段399号天府新谷1号楼620-625</p>
                <p>电  话： 028-86261949 / 400-808-6840  邮箱： yuandaima@itsource.cn</p>
                <p><a href="#">蜀ICP备14030149号-1  蜀公网安备510114990541</a></p>
            </div>
            <div class="col-sm-2 col-xs-6">
                <p>官方微博：</p>
                <p><img class="img-responsive" src="./images/sina.png" alt="新浪微博"></p>
                <p><img class="img-responsive" src="./images/tecent.png" alt="新浪微博"></p>
            </div>
            <div class="col-sm-2 col-xs-6">
                <p>官方微信：</p>
                <p><img class="img-responsive" src="./images/wx.jpg" alt="微信二维码"></p>
            </div>
        </div>
    </div>
</footer>

<!-- 引入jquery -->
<script src="./lib/jquery/jquery.js"></script>

<!-- 引入bootstrap核心库 -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>

<!-- 引入自定义的效果 -->
<script src="./dist/js/p2p.min.js"></script>
</body>
</html>