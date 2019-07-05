

$(document).ready(function(){


  /*post请求*/
 /* var boxv = document.getElementById('aja');*/

    /*console.log(this.value);*/
    /*document.getElementsByClassName("hidd")[0].style.display = "block";*/
    /*创建异步对象*/
    var xhr = new XMLHttpRequest();
    /*设置请求行*/
    xhr.open('post','index_post_json.php');
    /*设置请求头*/
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    /*注册状态改变事件*/
    xhr.onreadystatechange=function(){
      if(xhr.readyState==4 && xhr.status==200){
        /*console.log(xhr.responseText);*/
        /*document.querySelector('h5').innerHTML = xhr.responseText;*/
        var res = JSON.parse(xhr.responseText);
        /*console.log(res[0].img);*/
        var tehuiLi = document.getElementById("tehuiLi").getElementsByTagName("li");
        console.log(tehuiLi);
        for(var i=0;i<tehuiLi.length;i++){
          tehuiLi[i].getElementsByTagName("img")[0].src= res[i].img;
          tehuiLi[i].getElementsByTagName("span")[0].innerHTML= res[i].现价;
          tehuiLi[i].getElementsByTagName("s")[0].innerHTML= res[i].原价;

         /* tehuiLi[0].getElementsByTagName("img")[0].src = "images/tehui04.jpg";
          tehuiLi[1].getElementsByTagName("img")[0].src = "images/tehui04.jpg";*/
         /* tehui.src = res[i].img;
          /!*找li下面的现价*!/
          var tehuiFirst = tehuiLi[i].getElementsByTagName("span");
          /!*console.log(tehuiFirst[0].innerHTML);*!/
          tehuiFirst[i].innerHTML = res[i].现价;

          /!*找li下面的原价*!/
          var tehuiLast = tehuiLi[i].getElementsByTagName("s");
          /!*console.log(tehuiLast[0].innerHTML);*!/
          tehuiLast[i].innerHTML = res[i].原价;*/
        }


   /*     /!*找特惠所有的图片li*!/
        var tehuiLi = document.getElementById("tehuiLi").getElementsByTagName("li");
        /!* console.log(tehuiLi);*!/
        for(var i=0;i<tehuiLi.length;i++){

          /!*找li下面的图片路径*!/
          var tehuiImg = tehuiLi[i].getElementsByTagName("img")[0].src;
          console.log(tehuiImg);

          /!*找li下面的现价*!/
          var tehuiFirst = tehuiLi[i].getElementsByTagName("span");
          console.log(tehuiFirst[0].innerHTML);

          /!*找li下面的原价*!/
          var tehuiLast = tehuiLi[i].getElementsByTagName("s");
          console.log(tehuiLast[0].innerHTML);
        }*/



      }
    };
    /* 发送请求.post要传参*/
    xhr.send();




  /*/*搜索出的数目*!/
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
