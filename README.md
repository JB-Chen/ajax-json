# ajax-json
><h4>基于json数据格式的ajax图片瀑布流加载</h4>
这里的代码均是基于ajax的json格式加载数据，并且是基于图片瀑布流的基本学习！<br>
由于主要是前端的，所以代码中涉及到的后端文件data.php并不涉及逻辑处理，
只做了简单的数据转换操作，详细的后端逻辑处理这里并不涉及。
***
文件简介：
<ul>
  <li>
    Public(公共文件夹，存放css+img+js)
      <ol>css</ol>
      <ol>img</ol>
      <ol>js</ol>
   </li>
  <li>data.php(简单逻辑处理的后台数据)</li>
  <li>index.html(首页html代码+js的ajax逻辑处理)</li>
</ul>

## 效果图 ##
![image](https://github.com/JB-Chen/ajax-json/blob/master/Public/img/git1.gif) 
***
>html代码
```html
<body>
  <div id="content">
	<!-- 图片容器 -->
	<ul id="ul" class="img-container">
		
		<li></li>
		<li style="margin:0 4px;"></li>
		<li></li>
		<li></li>
		
	</ul>
	<div style="clear:both;"></div>
	<input type="button" value="点击加载更多" id="btn">
	
  </div>
</body>
```
>javascript代码
```javascript
<!-- ajax实现代码 -->
  <script type="text/javascript">
      window.onload = function(){
      	//自定义指针，指向加载条数
           var next = 0;
           var last = 3;
           var length = 4;
           //定义按钮开关
           var flag = false;
           $('input').click(function(){
           	//如果li个数小于0，则返回false
           	   if($('#content li').size() <0 ){
           	   	 return false;
           	   }
           	//否则执行函数send()
           	   else{
           	   	 send();
           	   }
           });

           function send(){
           	//此判断为控制按钮
               if(flag){
               	return false;
               }

               var oLi = document.getElementById('ul').getElementsByTagName('li');
            //jquery的ajax封装函数
               $.ajax({
               	  url:'./data.php',
                  type:'post',
                  data:{n:next,l:last},
                  beforeSend:function(){
                  	$('ul').append("<div id='load'>加载中……</div>");
                  },
                  success:function(data){
                  	if(next==40){
                         $('input').val('加载完毕');
                         flag = true;
                         $('#load').remove();
                   	 }
                  	if(data != null){
                  		data = eval('('+data+')');
                        //alert(data[0].src);
                        for(var i=0;i<length;i++){
                              //alert(length);
                              var src = data[i].src;
                              var title = data[i].title;
                              var html = '<div class="con"><img src="'+src+'"><a href="#">'+title+'</a><p>阅读全文</p></div>';
                              //alert(getShort());
                               oLi[getShort()].innerHTML += html;
                              //alert(oLi);
                        }
                  	}


                  
                  },
                   complete:function(){
                   	 $('#load').remove();
                   }
               });
               next +=4;
               last +=4;

               //得到最短序列号方法
               function getShort(){
               	 var oLi = document.getElementsByTagName('li');
               	  var index = 0;
               	  var iH = oLi[index].offsetHeight;
               	  //alert(iH);
               	  for (var i=0;i<oLi.length;i++){
               	  	if(oLi[i].offsetHeight < iH){
               	  		index = i;
               	  		iH = oLi[index].offsetHeight;
               	  	}
               	  }
               	  return index;
               }
           }
      }
  </script>
```
>css代码这里就省略了，详情见Public中index.css代码
>data.php（为data.php后台逻辑处理代码，这里只做简单处理）
```php
<?php 

// php头文件
 header('context/type:text/html;charset="utf-8"');
 
 $arr = array(
    
    array('src' => 'Public/img/1.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/2.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/3.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/4.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/5.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/6.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/7.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/8.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/1.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/2.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/3.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/4.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/5.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/6.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/7.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/8.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/1.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/2.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/3.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/4.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/5.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/6.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/7.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/8.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/1.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/2.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/3.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/4.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/5.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/6.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/7.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/8.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/1.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/2.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/3.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/4.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/5.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/6.jpg' , 'title' => '加载测试'),
    array('src' => 'Public/img/7.jpg' , 'title' => 'ajax实现加载'),
    array('src' => 'Public/img/8.jpg' , 'title' => '加载测试'),
 	);
 $n = $_POST['n'];
 $l = $_POST['l'];
 //将数组转化为json格式，json_encode()是php函数
 $array = array();
 
 for($j=$n;$j<$l+1;$j++){
 	array_push($array,$arr[$j]);
 }
 
 $a = json_encode($array,true);
 echo $a;
 ?>
```
`以上为基于json格式的ajax数据加载+图片瀑布流加载，可以clone代码自己去学习，如果想要继续完善可以fork改良，O(∩_∩)O谢谢`
