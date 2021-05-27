<?php
    //接收 POST传参
    echo'<pre>';print_r($_POST);echo'</pre>';

    //获取用户名
    $user_name = $_POST['u_name'];
    //验证用户名是否符合用户名规则   大小写英文字母 不少于6
    $patten = "/^[a-zA-Z]{6,}$/";

    if( !preg_match($patten,$user_name) ){
        echo "用户名不符合规则";
    }else{
    	echo "用户名可用";
    }
     

    $patten_email="/^[1-9][0-9]{4,9}@[a-z]{2,5}.com$/";
    if (!email($patten_email,$email)) {
    	echo "email输入有误";
    }

    $patten_tel="/^[1][1-9]{10}$/";
    if (!tel($patten_tel,$tel)) {
    	echo "手机号输入有误";
    }
    