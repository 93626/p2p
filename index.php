<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p金融借贷平台</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">

    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">

    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- 头部 -->
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
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">首页</a></li>
                <li><a href="#">小强</a></li>
                <li><a href="#">赶快充值</a></li>
                <li><a href="#">注销</a></li>
                <li><a href="#">帮助</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html="true"
                       title="<img src='./images/contract.png'/>">联系客服</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- 主导航 -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="网站logo"/>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=" navbar-collapse" id="">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">我要投资</a></li>
                <li><a href="#">我要借款</a></li>
                <li><a href="#">个人中心</a></li>
                <li><a href="#">新手指引</a></li>
                <li><a href="#">关于我们</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- 轮播 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- 下面图标 -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- 滚动的图片 -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="./images/banner01.jpg" alt="...">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="./images/banner02.jpg" alt="...">
            <div class="carousel-caption"></div>
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

<!--借款-->
<div class="container" id="feature">
    <div class="row">
        <div class="col-sm-4 col-xs-12">
            <h3>收益率高</h3>
            <p>收益率高收益率高收益率高收益率高收益率高收益率高收益率高收益。</p>
        </div>
        <div class="col-sm-4 col-xs-12">
            <h3>收益率高</h3>
            <p>收益率高收益率高收益率高收益率高收益率高收益率高收益率高收益。</p>
        </div>
        <div class="col-sm-4 col-xs-12">
            <h3>收益率高</h3>
            <p>收益率高收益率高收益率高收益率高收益率高收益率高收益率高收益。</p>
        </div>
    </div>
</div>


<!-- 投资信息 -->
<div class="container">
    <div class="panel panel-default">
        <!-- 标题 -->
        <div class="panel-heading clearfix">
            <h2 class="pull-left">进行中借款</h2>
            <a class="pull-right" href="#">进入投资列表</a>
        </div>
        <!-- 内容表格 -->
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
                <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
            </tr>
            <tr>
                <td>张三</td>
                <td class="hideTitle">给我2000度过难关</td>
                <td>10.00%</td>
                <td>2,000.00</td>
                <td class="hideTitle">按月分期还款</td>
                <td>78.00%</td>
                <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
            </tr>
            <tr>
                <td>张三</td>
                <td class="hideTitle">给我2000度过难关</td>
                <td>10.00%</td>
                <td>2,000.00</td>
                <td class="hideTitle">按月分期还款</td>
                <td>78.00%</td>
                <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
            </tr>
            <tr>
                <td>张三</td>
                <td class="hideTitle">给我2000度过难关</td>
                <td>10.00%</td>
                <td>2,000.00</td>
                <td class="hideTitle">按月分期还款</td>
                <td>78.00%</td>
                <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- 新闻文章 -->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">最新资讯</h2>
                    <a class="pull-right" href="#">更多>></a>
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
                    <h2 class="pull-left">最新资讯</h2>
                    <a class="pull-right" href="#">更多>></a>
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
                    <h2 class="pull-left">最新资讯</h2>
                    <a class="pull-right" href="#">更多>></a>
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
                    <h2 class="pull-left">最新资讯</h2>
                    <a class="pull-right" href="#">更多>></a>
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