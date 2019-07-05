<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/reserve.css"/>
    <link rel="stylesheet" href="css/indexRoot.css"/>
    <link rel="stylesheet" href="css/weifuwu.css"/>
    <link rel="stylesheet" href="css/person.css"/>
    <title>Document</title>
</head>
<body>
<div class="top" id="top_hidd" style="background-color: orangered;z-index:999 ;">
    <div class="text container">
        <!--logo-->
        <div class="top_left fl">
            <img src="images/01.jpg" alt="" style="width: 100%;height: 100%;"/>
        </div>
        <!--导航-->
        <div class="top_midd fl">
            <ul class="navv">
                <li class="flli"><a href="indexRoot.html">主页</a></li>
                <li class="flli pill" ><a href="javascript:;">商品分类</a>
                    <ul>
                        <li><a href="javascript:;">特惠专区</a></li>
                        <li><a href="javascript:;">生活用品</a></li>
                        <li><a href="javascript:;">电子产品</a></li>
                        <li><a href="javascript:;">小零食</a></li>
                    </ul>

                </li>
                <li class="flli"><a href="person.html">个人中心</a></li>
                <li class="flli"><a href="personaccount.html">微服务</a></li>
                <li class="flli"><a href="index.html">安全退出</a></li>
            </ul>
        </div>
        <div class="top_right fr" style="height:60px;line-height: 60px;">
            <span><a  href="index.html">登录 </a> | <a href="index.html"> 注册</a></span>
        </div>
</div>
</div>

<!--中间内容区-->
<div class="center ">
    <div class="container">
            <!--修改个人资料内容-->
            <div class="date" >
                <div class="photo_set">
                    <img src="images/02.jpg" alt=""/>
                    <p><a href="">设置头像</a></p>
                </div>

                <div class="date_set">
                    <p><span>王爱购</span> - <span>男</span></p>
                    <p><span>绑定手机号 : </span><span>16888888888</span></p>
                    <p>注册时间 : <span>2011-08-16</span></p>
                    <p class="modifiy"><a href="date.html">保存</a></p>
                </div>
            </div>
            <div class="return_per"><a href="person.html">返回</a></div>
    </div>
</div>

<!--footer部分-->
<script>
    /*下拉菜单*/
    $(document).ready(function(){
        $(function(){
            $('.pill').hover(function(e) {
                $(this).children().stop().slideToggle()
            });
        });
        $(function(){
            $('.hidd_nav>li').hover(function(e) {
                $(this).children().stop().slideToggle()
            });
        });

    });
</script>
<!--<script>
    var ulLi = document.getElementById("pointer").getElementsByTagName('li');
    var tran=document.getElementById('b');
    for (var i = 0; i < ulLi.length; i++) {
        ulLi[i].onmouseover = function () {
            for (var i = 0; i < ulLi.length; i++) {
                if (ulLi[i] === this) {
                    tran.style.marginTop=ulLi[i].offsetTop-125+'px';
                }
            }
        }
    }
</script>-->
<script>
   /* var li = document.getElementsByClassName("hidd_nav")[0].childNodes;
    var ul = document.getElementsByClassName("haha")[0];
    var uls = document.getElementsByClassName("hehe")[0];

    li[0].onclick = function(){
        uls.style.display = "none";
        ul.style.display = "block";

    };
    li[1].onclick = function(){
        ul.style.display = "none";
        uls.style.display = "block";
    };*/
    /*console.log(ul);*/

    /*for(var i=0;i<li.length;i++){
        this.onclick = function(){
            /!*var show = li[i].getElementsByTagName(ul)[0];
            show.style.display = "block";*!/
            ul.style.display = "block";
        };
    }
*/
</script>
<script src='js/jquery.min.js'></script>
<script  src="js/main.js"></script>
</body>
</html>