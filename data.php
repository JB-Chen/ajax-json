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