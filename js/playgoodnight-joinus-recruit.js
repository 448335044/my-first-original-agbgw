$(function(){
  $('.recruit',function(){$.ajax({
    type: "POST", //请求的方式，也有get请求
    url: "data2.json", //请求地址，后台提供的,这里我在本地自己建立了个json的文件做例子
    data: {name:name},//data是传给后台的字段，后台需要哪些就传入哪些
    dataType: "json", //json格式，后台返回的数据为json格式的。
    success: function(result){
      var dataObj = result, //返回的result为json格式的数据
        con = "";
      $.each(dataObj, function(index, item){
        con += "<tr>";
        con += "<td>"+item.name+"</td>";
        con += "<td style='padding-left: 20px'>"+item.address+"</td>";
        con += "<td>"+item.date+"</td>";
        con += "<td><button id='show' type=\"button\" class=\"btn btn-primary\">查看</button></td>";
        con += "</tr>";


      });
      console.log(con);    //可以在控制台打印一下看看，这是拼起来的标签和数据
      $("#con").html(con); //把内容入到这个div中即完成


    }

  })
  })

})


