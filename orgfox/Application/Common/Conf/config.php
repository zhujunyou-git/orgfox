<?php
return array(
    //'配置项'=>'配置值'
    'SHOW_PAGE_TRACE' =>true,
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'fox', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'fox_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
    'AUTOLOAD_NAMESPACE'  => array('Lib' => APP_PATH . 'Library'),//定义命名空间
    'URL_MODULE_MAP'    =>    array('test'=>'admin'),//修改后台路径
    'TMPL_L_DELIM'          =>  '{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}',            // 模板引擎普通标签结束标记
    'TMPL_ACTION_SUCCESS'=>'Public:dispatch_jump',//成功跳转页面
    'TMPL_ACTION_ERROR'=>'Public:dispatch_jump',//失败跳转页面


    /*邮箱配置*/
    'MAIL_ADDRESS'=>'qwe6411qwe@163.com', // 邮箱地址
    'MAIL_SMTP'=>'smtp.163.com', // 邮箱SMTP服务器
    'MAIL_LOGINNAME'=>'qwe6411qwe@163.com', // 邮箱登录帐号
    'MAIL_PASSWORD'=>'zhujunyou111', // 邮箱密码
    'MAIL_SENDER'=>'企狐', //发件人名字

    /*支付宝配置*/
    'alipay_config'=>array(
        'partner' =>'2088121773975008',   //这里是你在成功申请支付宝接口后获取到的PID；
        'key'=>'dxm577jmlpdtnglkh2ekd1kwe2el9juy',//这里是你在成功申请支付宝接口后获取到的Key
        'sign_type'=>strtoupper('MD5'),
        'input_charset'=> strtolower('utf-8'),
        'cacert'=> getcwd().'\\cacert.pem',
        'transport'=> 'http',
    ),
    //以上配置项，是从接口包中alipay.config.php 文件中复制过来，进行配置；

        'alipay'   =>array(
    //这里是卖家的支付宝账号，也就是你申请接口时注册的支付宝账号
        'seller_email'=>'2390335759@qq.com',
    //这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
        'notify_url'=>'http://www.entefox.com/index.php/home/pay/notifyurl',
    //这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
        'return_url'=>'http://www.entefox.com/index.php/home/pay/returnurl',
    //支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
        'successpage'=>'user/administration',
    //支付失败跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参unpay（未支付列表）
        'errorpage'=>'user/administration',
    ),
);