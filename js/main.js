$(document).ready(function(){

/*/!*搜索出的数目*!/
  $("#reserch").click(function(){
    $(".list").hide();
    $(".reserch-text").show();
    $("#number").html("共查询到"+162+"条包含"+"的"+"的搜索结果");
  });*/
/*  $(".haha>a").click(function(){
    $(".list").hide();
    $("#intro").show();
    $(".intro").html("haha");
  });*/
  /*弹窗二维码*/
  $(".code").click(function(){
    $(".codeText").fadeToggle();
    $(".account-text").hide();
  });
  /*去掉二维码*/
  $("#returncode").click(function(){
    $(".codeText").hide();
    $(".account-text").show();
  });



  /*登陆注册切换*/
  $(".sign").click(function(){
    $("#phone").show();
    $("#account").hide();
    $(".loginValue").html("注册");
  });
  $(".login").click(function(){
    $("#phone").hide();
    $("#account").show();
  });

  /*更多内容切换*/
  $(".more").click(function(){
    $(".hidee").hide();
    $("#list-button").show();
  });
  $(".moreRight").click(function(){
    $(".hideeLeft").hide();
    $(".hideeRight").hide();
    $("#list-button-right").show();
  });
});