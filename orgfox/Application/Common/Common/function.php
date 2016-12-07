<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/25
 * Time: 16:52
 */
//验证码
function check_verify($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
//打印数据
function P($data){
    echo "<pre>";
    var_dump($data);
}
//判断是否邮箱
function isEmail($email)
{
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
        return false;
    }else{
        return true;
    }
}
//判断是否手机号
function isphone($phone){
    if(!preg_match('/^1[3|4|5|8][0-9]\d{4,8}$/',$phone )){
        return false;
    }else{
        return true;
    }
}
//发送邮件
function SendMail($address,$title,$message)
{
    vendor('PHPMailer.class#phpmailer');
    $mail=new PHPMailer();
    // 设置PHPMailer使用SMTP服务器发送Email
    $mail->IsSMTP();
    // 设置邮件的字符编码，若不指定，则为'UTF-8'
    $mail->CharSet='UTF-8';
    $mail->Port=25;
    // 添加收件人地址，可以多次使用来添加多个收件人
    $mail->AddAddress($address);
    // 设置邮件正文
    $mail->Body=$message;
    // 设置邮件头的From字段。
    $mail->From=C('MAIL_ADDRESS');
    // 设置发件人名字
    $mail->FromName=C('MAIL_SENDER');
    // 设置邮件标题
    $mail->Subject=$title;
    // 设置SMTP服务器。
    $mail->Host=C('MAIL_SMTP');
    // 设置为“需要验证”
    $mail->SMTPAuth=true;
    // 设置用户名和密码。
    $mail->Username=C('MAIL_LOGINNAME');
    $mail->Password=C('MAIL_PASSWORD');
    // 发送邮件。
    return($mail->Send());
}


/*JS定时输出字符串 1秒钟一个
var str='12313123';
    var len=str.length-1;
    var i=0;
    var strs='';
    var time=setInterval(function(){
        strs+=str[i]
        $('input').val(strs)
        if(i<len){
            i++;
        }else{
            clearInterval(time);
        }
    },1000);//1000为1秒钟*/
function confInfo(){
    return array(
        'to_user_id'=>session('user.user_id'),
        'to_username'=>session('user.username'),
        'time'=>time(),
    );
}
function user_id(){
    return session('user.user_id');
}
function username(){
    return session('user.username');
}
/*
 * 文件上传
 * @param $filepic 文件位置  'uploads/a/'
 */
function func_file($filepic){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
    $upload->rootPath  =     './'.$filepic; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    $pic='/'.$filepic;
    // 上传文件
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else {// 上传成功 获取上传文件信息
        foreach ($info as $file) {
            $pic .= $file['savepath'] . $file['savename'];
        }
        return $pic;
    }
}
/*
 * 单文件上传
 * @param $filepic 文件位置  'uploads/a/'
 * @param $name    文件名称
 */
function func_fileone($filepic,$name){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
    $upload->rootPath  =     './'.$filepic; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    $pic='/'.$filepic;
    // 上传文件
    $info   =   $upload->uploadOne($_FILES[$name]);
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else {// 上传成功 获取上传文件信息
        $pic .= $info['savepath'] . $info['savename'];
        return $pic;
    }
}

/**
 * 递归重组节点信息为多为数组
 * @param $array  要处理的节点数组
 * @param $parent 父级字段
 * @param $sublevel子级字段
 * @param $pid   父级id
 */
function data_merge($array, $parent = null, $sublevel= null, $pid = 0)
{
    $arr = array();
    foreach ($array as $v) {
        if ($v[$parent] == $pid) {
            $v['list'] = data_merge($array,$parent, $sublevel,$v[$sublevel]);
            $arr[] = $v;
        }
    }
    return $arr;
}

/**
 * TODO 基础分页的相同代码封装，使前台的代码更少
 * @param $count 要分页的总记录数
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage($count, $pagesize = 10) {
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
/*
 * 验证码
 */
function GetRandStr($len) {
    $chars = array(
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
    $charsLen = count($chars) - 1;
    shuffle($chars);
    $output = '';
    for ($i = 0; $i < $len; $i++) {
        $output .= $chars[mt_rand(0, $charsLen)];
    }
    return $output;
}