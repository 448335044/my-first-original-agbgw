
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/reserve.css"/>
    <link rel="stylesheet" href="css/indexRoot.css"/>
    <link rel="stylesheet" href="css/weifuwu.css"/>
    <title>Document</title>
    <style>
        .position{
            position: relative;
        }
        #b {
            display: block;
            width: 0px;
            height: 0px;
            border-top: 25px solid rgba(0, 0, 0, 0);
            border-bottom: 25px solid rgba(0, 0, 0, 0);
            border-right: 25px solid #e5e5e5;
            border-left: 25px solid rgba(0, 0, 0, 0);
            background-color: none;
            margin-top: 25px;
            float: left;
            position:absolute;
            left:-34px;

        }
    </style>
</head>
<body>

<div style="height:60px;"><?php include("header.php"); ?></div>


<!--中间内容区-->
<div style="height:500px;">
	<div class="center">
    <div class="container-new">
        <div class="row">
            
            <div class="col-md-2" >
                <ul id="pointer" style="padding-left: 15px;">
                    <li><a href="personaccount.html" >账号中心</a></li>
                    <li><a href="reserve.html">帮助中心</a></li>
                </ul>
            </div>
            <div class="col-md-1 position" >
                <div id="b"></div>
                <div class="line"></div>
            </div>

            
            <div class="col-md-9">
                
                <div style="width: 200px;text-align: center; height: 150px; line-height:150px; border: 1px solid #d3d3d3; float: left;margin-right: 50px; font-size: 25px;">申请账号</div>
                <div style="width: 200px;text-align: center; height: 150px; line-height:150px; border: 1px solid #d3d3d3; float: left;margin-right: 50px; font-size: 25px;">修改密码</div>
            </div>
        </div>
    </div>
</div>
</div>

<!--footer部分-->
<div class="copyright" style="text-align: center;font-size: 20px; margin-top: 50px;">
              <p>个人版权® </p>
              <p><span><a href="">帮助</a></span> | <span><a href="">用户反馈</a></span></p>
              <p>请联系我：17167101167</p>
              <p>qq邮箱：448335044@qq.com</p>
 </div>
<script>
    /*下拉菜单*/
    $(document).ready(function(){
        $(function(){
            $('.pill').hover(function(e) {
                $(this).children().stop().slideToggle()
            });
        })
    });
</script>
<script>
    var ulLi = document.getElementById("pointer").getElementsByTagName('li');
    var tran=document.getElementById('b');
    for (var i = 0; i < ulLi.length; i++) {
        ulLi[i].onmouseover = function () {
            for (var i = 0; i < ulLi.length; i++) {
                if (ulLi[i] === this) {
                    tran.style.marginTop=ulLi[i].offsetTop+0+'px';
                }
            }
        }
    }
</script>"

<script src='js/jquery.min.js'></script>
<script  src="js/main.js"></script>
</body>
</html>
