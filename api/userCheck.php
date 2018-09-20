<?php
    //接收用户数据
    $username=$_POST["username"];
    $password=md5($_POST["Password"]); //md5加密32位密码
    //链接数据库
    require_once("./conn.php");
    //构造sql语句
    $sql="select * from userinfo where username='".$username."' and pwd='".$password."'"; //字符串值必须有引号
    //执行sql语句
    //mysqli_query 成功true 失败false
    $result=mysqli_query($link,$sql);
    //获取查询的结果集
    $rs=mysqli_fetch_assoc($result); //不为null就是账号密码正确，登录成功，反之就是账号或者密码不正确
    //var_dump($rs);
    //根据是否执行成功返回json结果到前端
    if($rs!=null){
        //登录成功就创建session对象
        session_start();
        $_SESSION["username"]=$rs["username"];
        $_SESSION["userid"]=$rs["userid"];   
        //json_encode() 把关联数组转换为json格式
        $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功!"];
        echo json_encode($rsArray);
    }
    else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败!"];
        echo json_encode($rsArray);
    }
    //释放内存资源
    mysqli_free_result($result);
    require_once("./freeClose.php");
?>