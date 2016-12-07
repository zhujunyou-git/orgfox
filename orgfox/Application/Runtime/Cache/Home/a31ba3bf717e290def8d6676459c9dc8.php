<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>我是服务商（交易管理）</title>
      <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/Public/css/fotorama.css">
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/page.css" rel="stylesheet">
      <script src="/Public/js/jquery-2.1.1.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/jquery.kxbdmarquee.js"></script>
<script src="/Public/js/fotorama.js"></script>
<script src="/Public/js/bootstrap-datetimepicker.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
         <div class="container-fluid personalTop">
            <div class="container">
              <div class="pull-left personalNav">
                  <a href="<?php echo U('index/index');?>" class="pull-left"><img src="/Public/img/logo1.jpg" class="autoimg" alt=""></a>
                  <p class="pull-left">
                    <a href="PersonalCenter.html">我的主页</a>
                    <a href="employer.html" >我是雇主</a>
                    <a href="serprovider.html" class="cur">我是服务商</a>
                    <a href="administration.html">账号管理</a>
                    <a href="mynews.html">我的消息</a>
                  </p>
              </div>
              <div class="mysearchs personalsearchs pull-right">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">服务<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">建筑工程</a></li>
                      <li class="divider"></li>
                      <li><a href="#">建筑工程</a></li>
                      <li class="divider"></li>
                      <li><a href="#">建筑工程</a></li>
                      <li class="divider"></li>
                      <li><a href="#">建筑工程</a></li>
                      <li class="divider"></li>
                      <li><a href="#">建筑工程</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left myinput" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="请输入关键词">
                  </div>
                  <button type="submit" class="btn btn-default">搜索</button>
                </form>
              </div>
              </div>
            </div>
         </div>
         <div class="container personalmain employer">
             <div class="personalleft pull-left">
                <div>
                   <h3><img src="/Public/img/I1.png" class="autoimg" alt="">交易管理</h3>
                   <ul>
                     <li class="cur"><a href="javascript:void(0);">我承接的服务</a></li>
                     <li><a href="javascript:void(0);">交易评价</a></li>
                     <li><a href="javascript:void(0);">我的投标记录</a></li>
                     <li><a href="javascript:void(0);">我的订单</a></li>
                   </ul>
                </div>
                <div>
                   <h3><img src="/Public/img/I2.png" class="autoimg" alt="">我的收藏</h3>
                   <ul>
                     <li><a href="javascript:void(0);">我收藏的任务</a></li>
                   </ul>
                </div>
                <div>
                   <h3><img src="/Public/img/I3.png" class="autoimg" alt="">店铺管理</h3>
                   <ul>
                       <?php if($shopS['option'] == 1): ?><li><a href="<?php echo U('shop/myshop');?>" target="_blank">我的店铺</a></li>
                           <?php else: ?>
                           <li class="oneljh"><a href="javascript:void(0);">我的店铺</a></li><?php endif; ?>
                     <li><a href="javascript:void(0);">店铺设置</a></li>
                     <li><a href="javascript:void(0);">发布服务</a></li>
                     <li><a href="javascript:void(0);">服务管理</a></li>
                   </ul>
                </div>
             </div>
             <div class="employerright pull-right employer1 administr">
                 <div>
                     <h3>我的订单</h3>
                     <div class="btn-group btn-group-justified myjusti">
                         <div class="btn-group">
                             <select name="" id="">
                                 <option value="悬赏">悬赏</option>
                             </select>
                         </div>
                         <div class="btn-group">
                             <button type="button" class="btn btn-default btn-default3 mybuttonlh">搜索</button>
                         </div>
                     </div>
                     <div class="listshowies">
                         <?php if(empty($order)): ?><div class="listshowies mylistshow">
                                 <div class="shownone">
                                     <h3>抱歉！暂无订单</h3>
                                 </div>
                             </div><?php endif; ?>
                         <div class="listshowies mylistshow" style="display: none;">
                             <div class="shownone">
                                 <h3>抱歉！暂无订单</h3>
                             </div>
                         </div>
                         <div class="shownone myorder">
                             <ul>
                                 <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                         <i class="pull-right">
                                             <?php if($vo['acceptance'] == 1): ?><a href="javascript:void(0)" class="color">交易完成</a>
                                                 <?php else: ?>
                                                 <?php if($vo['delivery'] == 0): ?><a href="<?php echo U('Serve/livt?id='.$vo['id']);?>">交付内容</a>
                                                     <?php else: ?>
                                                     <a href="javascript:void(0)" class="color">等待验收</a><?php endif; endif; ?>
                                         </i>
                                         <b class="pull-left autoimg" style="background-image: url(<?php echo ($vo['bbbox']); ?>)"></b>
                                         <h4><?php echo ($vo['server_name']); ?></h4>
                                         <p>赏金：<span>￥<?php echo ($vo['money']); ?></span></p>
                                         <p><?php echo ($vo['autograph']); ?></p>
                                     </li><?php endforeach; endif; else: echo "" ;endif; ?>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="cur">
                   <h3>我承接的服务</h3>
                     <form action="<?php echo U(user/serprovider);?>" class="form1">
                   <div class="btn-group btn-group-justified mygrouplj">
                      <div class="btn-group">
                        <select name="task_model_id" >
                            <option value="">全部</option>
                            <?php if(is_array($task_model)): $i = 0; $__LIST__ = $task_model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                      <div class="btn-group">
                        <select name="state" >
                          <option value="">全部</option>
                          <option value="3">工作中</option>
                          <option value="4">交付中</option>
                          <option value="6">已结束</option>
                        </select>
                      </div>
                      <div class="btn-group">
                        <input type="hidden" value="1" name="task">
                        <button type="button" class="btn btn-default btn-default1 mybuttonlh">搜索</button>
                      </div>
                   </div>
                   </form>
                <?php if(empty($opt_list)): ?><div class="listshowies">
                        <div class="shownone myonelh">
                          <h3>抱歉！没有找到符合以上条件的任务</h3>
                          <p>你可以重新再进行筛选 或</p>
                          <a href="<?php echo U('task/taskhall');?>">查看交易大厅</a>
                        </div>
                   </div>
                <?php else: ?>
                    <div class="listshowies mylistshow" style="display: none">
                        <div class="shownone">
                            <h3>抱歉！没有找到符合以上条件的任务</h3>
                            <p>你可以重新再进行筛选 或</p>
                            <a href="<?php echo U('task/taskhall');?>">查看交易大厅</a>
                        </div>
                    </div>
                     <div class="taskbox">
                         <ul class="myserlj">
                             <?php if(is_array($opt_list)): $i = 0; $__LIST__ = $opt_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                 <b class="pull-left"><img src="" alt=""></b>
                                 <h3>￥<?php echo ($vo["money"]); ?><span><?php echo ($vo["title"]); ?></span></h3>
                                 <p>
                                     <span><i><img src="/Public/img/ip1.png" class="autoimg" alt=""></i><?php echo ($vo["username"]); ?></span>
                                     <span><i><img src="/Public/img/ip4.png" class="autoimg" alt=""></i><?php echo ($vo["number"]); ?>两人投标</span>
                                     <span><i><img src="/Public/img/ip3.png" class="autoimg" alt=""></i><?php echo (date('Y-m-d',$vo["time"])); ?></span>
                                     <span><i><img src="/Public/img/ip2.png" class="autoimg" alt=""></i><?php if($vo["type"] == 1): ?>赏金未托管<?php else: ?>赏金已托管<?php endif; ?></span>
                                 </p>
                                 <i><?php echo ($vo["content"]); ?></i>
                                 <i class="boxi"><?php echo ($vo["indus_id"]); ?></i><i class="boxi"><?php echo ($vo["indus_pid"]); ?></i>
                                 <a href="<?php echo U('task/delivery?task_id='.$vo['task_id']);?>" class="lookbox">查看</a>
                             </li><?php endforeach; endif; else: echo "" ;endif; ?>
                         </ul>
                     </div><?php endif; ?>
                 </div>
                 <div class="onelj">
                   <h3>店铺设置</h3>
                   <div class="setup">
                     <form action="<?php echo U('shop/shopSte');?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                       <p>关闭店铺后你将不在服务商列表</p>
                       <div class="form-box">
                           <span>店铺状态：</span>
                          <label class="checkbox-inline myinline">
                            <input type="radio" id="inlineCheckbox1" <?php echo $shopS['option']==1?"checked='checked'":'';?> name="option" value="1"> 开启
                          </label>
                          <label class="checkbox-inline myinline">
                            <input type="radio" id="inlineCheckbox2" <?php echo $shopS['option']==2?"checked='checked'":'';?> name="option" value="2"> 关闭
                          </label>
                       </div>
                       <div class="form-group form-box">
                        <label for="shopname" class="col-sm-2 control-label">店铺名称：</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="shopname" name="shopname" placeholder="输入名称" value="<?php echo ($shopS['shopname']); ?>">
                        </div>
                      </div>
                       <div class="form-group form-box">
                        <label for="autograph" class="col-sm-2 control-label">个性签名：</label>
                        <div class="col-sm-5">
                          <textarea class="form-control" rows="3" name="autograph"><?php echo ($shopS['autograph']); ?></textarea>
                          <p>你的店铺广告言语直接影响到他人对你的第一印象，请慎重对待，最多50字</p>
                        </div>
                      </div>
                      <div class="form-group form-box">
                        <label for="textarea" class="col-sm-2 control-label">地址：</label>
                        <div class="col-sm-10">
                          <div class="btn-group btn-group-justified">
                              <div class="btn-group">
                                  <select name="pro"  class="pro">
                                      <option>请选择</option>
                                      <?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" <?php echo $shopS['pro']==$vo['id']?"selected='selected'":'';?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                  </select>
                              </div>
                              <div class="btn-group">
                                  <select name="city" class="pro1" >
                                      <?php if($shopS['city']): ?><option value="<?php echo ($shopS['city']); ?>"><?php echo ($shopS['city1']); ?></option><?php endif; ?>
                                  </select>
                              </div>
                           </div>
                         </div>
                      </div>
                       <div class="form-group form-box">
                        <label for="headpicture" class="col-sm-2 control-label">店铺头部图片：</label>
                        <div class="col-sm-5">
                          <p>提示  最佳图片尺寸：1200*280像素</p>
                          <input type="file" id="headpicture" name="headpicture" class="opbox">
                            <img src="<?php echo ($shopS['headpicture']); ?>" style="display: block">
                            <input type="hidden" name="id" value="<?php echo ($shopS['id']); ?>" class="boop">
                            <input type="button" class="delete" value="删除头部图片"/>
                        </div>
                      </div>
                       <div class="form-group form-box">
                        <label for="footpicture" class="col-sm-2 control-label">店铺背景图片：</label>
                        <div class="col-sm-5">
                          <input type="file" id="headpicture" name="footpicture" class="opbox">
                            <img src="<?php echo ($shopS['footpicture']); ?>"style="display: block">
                            <input type="hidden" name="id" value="<?php echo ($shopS['id']); ?>" class="boop">
                            <input type="button" class="delete" value="删除店铺背景图片"/>
                        </div>
                      </div>
                         <div class="popup" style="display: none">
                             <div class="popupdiv">
                                 <h5>三级类目<a href="javascript:void(0);">x</a></h5>
                                 <ul>

                                 </ul>
                             </div>
                         </div>
                      <input type="submit" value="保存" class="buttonfrom">
                         <div class="serproaera" style="display: none">
                              <div class="oneser"></div>
                              <div class="twoser"></div>
                              <div class="thereser"></div>
                         </div>
                     </form>
                       <div class="form-group form-box imfoup">
                           <label for="textarea" class="col-sm-2 control-label">服务范围：</label>
                           <div class="col-sm-10">
                               <div class="btn-group btn-group-justified">
                                   <div class="btn-group megroup">
                                       <div class="select">
                                           <button class="btn btn-default btn-sm" type="button">
                                               <strong>请选择</strong>
                                               <a href="javascript:void(0);" class="caret"></a>
                                           </button>
                                           <form action="" class="tablefrom">
                                               <ul class="dropdown-menu menu">
                                                   <?php if(is_array($parent_indus)): $i = 0; $__LIST__ = $parent_indus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0);"><input type="checkbox"  value="<?php echo ($vo['industry_id']); ?>" name="one_id[]" class="one_id" <?php echo in_array($vo['industry_id'],$shopS['one_id'])?"checked='checked'":''?> /><?php echo ($vo['industry_name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                               </ul>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                               <div class="scform acfrom">
                                   <form action="" id="tbodyform" class="tablefrom">

                                   </form>
<!--                                   <div class="scform cfform">

                                   </div>-->
                               </div>
                           </div>
                       </div>
                   </div>
                 </div>
                 <div>

                   <h3>交易评价</h3>
                     <form action="<?php echo U(user/serprovider);?>" class="form2">
                   <div class="btn-group btn-group-justified mygrouplj">
                      <div class="btn-group">
                        <select name="evaluate" >
                          <option value="1">好评</option>
                          <option value="2">中评</option>
                          <option value="3">差评</option>
                        </select>
                      </div>
                       <div class="btn-group">
                           <select name="to_user_id">
                               <option value="1">对我评价</option>
                               <option value="2">对他人评价</option>
                           </select>
                       </div>
                      <div class="btn-group">
                          <input type="hidden" name="eval" value="1">
                        <button type="button" class="btn btn-default btn-default2 mybuttonlh">搜索</button>
                      </div>
                   </div>
                    </form>
                     <?php if(empty($evallist)): ?><div class="shownone">
                             <h3>抱歉！没有评论</h3>
                         </div>
                         <?php else: ?>
                     <div class="listshowies">
                         <div class="shownone transaction myshowlj">
                             <?php if(is_array($evallist)): $i = 0; $__LIST__ = $evallist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="businesslists">
                                 <b class="pull-left autoimg" style="background-image: url(<?php echo ($vo['head']); ?>)"></b>
                                 <h3><?php echo ($vo['username']); ?><span>好评率：100%</span></h3>
                                 <p>提交于<?php echo (date("Y-m-d",$vo['time'])); ?></p>
                                 <p class="dybusi"><?php echo ($vo['content']); ?></p>
                                 <div class="eavlbox3">
                                     <p class="first-child">
                                         工作速度：
                                         <input type="hidden" value="<?php echo ($vo['sudu']); ?>"/>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                     </p>

                                     <p class="second-child">
                                         工作质量：
                                         <input type="hidden" value="<?php echo ($vo['zhiliang']); ?>"/>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                     </p>

                                     <p class="third-child">
                                         工作态度：
                                         <input type="hidden" value="<?php echo ($vo['taidu']); ?>"/>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                         <span class="glyphicon glyphicon-star"></span>
                                     </p>
                                 </div>
                             </div><?php endforeach; endif; else: echo "" ;endif; ?>
                         </div>
                         <div class="shownone myoneljh" style="display: none">
                             <h3>抱歉！没有评论</h3>
                         </div>
                     </div><?php endif; ?>
                 </div>
                 <div>
                   <h3>发布服务</h3>
                   <div class="fabu">
                     <form action="<?php echo U('shop/release');?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="fromac">
                      <div class="form-group form-box">
                        <label for="textarea" class="col-sm-2 control-label">选择服务：</label>
                        <div class="col-sm-10">
                            <div class="btn-group btn-group-justified">
                                <div class="btn-group">
                                    <select name="indus_id"  class="indus">
                                        <option value="">请选择</option>
                                        <?php if(is_array($parent_indus)): $i = 0; $__LIST__ = $parent_indus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['industry_id']); ?>"><?php echo ($vo['industry_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="indus_pid" class="indus1">
                                            <option value="">请选择</option>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="indus_tid" class="indus2">
                                            <option value="">请选择</option>
                                    </select>
                                </div>
                            </div>
                         </div>
                      </div>
                      <div class="form-group form-box">
                        <label for="textarea" class="col-sm-2 control-label">选择地区：</label>
                        <div class="col-sm-10">
                            <div class="btn-group btn-group-justified">
                                <div class="btn-group">
                                    <select name="pro"  class="pro">
                                        <option value="">请选择</option>
                                        <?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" ><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="city" class="pro1" >
                                            <option value="">请选择</option>
                                    </select>
                                </div>
                            </div>
                         </div>
                      </div>
                      <div class="form-group form-box">
                        <label for="address" class="col-sm-2 control-label">服务名称：</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="aname" placeholder="请输入" name="server_name">
                        </div>
                      </div>
                      <div class="form-group form-box">
                        <label for="address" class="col-sm-2 control-label">联系方式：</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="catname" placeholder="请输入" name="phone">
                        </div>
                      </div>
                      <div class="form-group form-box">
                        <label for="headpicture" class="col-sm-2 control-label">服务详情：</label>
                        <div class="col-sm-7">
                         <input type="file" id="aabox" name="aabox" class="opbox">
                           <p>图片不得超过2m,建议上传图片宽为950像素</p>
                        </div>
                        <div class="col-sm-7">
                          <textarea class="form-control" rows="3" name="autograph" placeholder="服务描述"></textarea>
                        </div>
                      </div>
                      <div class="form-group form-box">
                        <label for="footpicture" class="col-sm-2 control-label">上传服务图片：</label>
                        <div class="col-sm-7">
                          <input type="file" id="bbbox" name="bbbox" class="opbox">
                          <p>图片不得超过2m,建议上传图片230x230像素</p>
                        </div>
                      </div>
                      <div class="form-group form-box">
                        <label for="address" class="col-sm-2 control-label">出售价格：</label>
                        <div class="col-sm-5">
                            <script>
                                function check() {
                                    var i = document.getElementById("sname").value;
                                    var aljh = document.getElementById("sname");
                                    if (isNaN(i)) {
                                        aljh.value = "";
                                    }
                                }
                            </script>
                            <input type="text" class="form-control" name="money" id="sname" onkeyup="check();" placeholder="请输入" >
                        </div>
                      </div>
                      <div class="form-group form-box">
                        <label for="address" class="col-sm-2 control-label">交付模式：</label>
                        <div class="col-sm-5">下载</div>
                      </div>
                      <div class="form-group form-box">
                        <label for="address" class="col-sm-2 control-label">核对清单：</label>
                        <div class="col-sm-5">
                          <p>服务售价：￥<i>0</i></p>
                        </div>
                      </div>
                      <input type="submit" value="发布" class="buttonfrom">
                     </form>
                   </div>
                 </div>
                 <div>
                   <h3>服务管理</h3>
                   <div class="mycontrol">
                     <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="输入名称">
                      </div>
                      <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                   </div>
                   <div class="checkrow fuckrow">
                        <div class="cur">
                          <div class="row firstrow">
                             <div class="col-sm-2">名称</div> 
                             <div class="col-sm-2">售价（元）</div> 
                             <div class="col-sm-2">销售量</div> 
                             <div class="col-sm-2">发布时间</div> 
                             <div class="col-sm-2">状态</div> 
                             <div class="col-sm-2">操作</div> 
                          </div> <?php if(is_array($shop_list)): $i = 0; $__LIST__ = $shop_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><div class="row rowfuc">

                             <div class="col-sm-2"><span><?php echo ($li['server_name']); ?></span></div>
                             <div class="col-sm-2"><?php echo ($li['money']); ?></div>
                             <div class="col-sm-2">0</div>
                             <div class="col-sm-2"><?php echo (date("Y-m-d",$li['time'])); ?></div>
                                  <?php if($li['smt'] == 0): ?><div class="col-sm-2">下架</div>
                                  <?php elseif($li['smt'] == 1): ?>
                             <div class="col-sm-2">上架</div><?php endif; ?>
                             <div class="col-sm-2">
                                 <?php if($li['smt'] == 0): ?><a href="<?php echo U('SMT',array('shop_id'=>$li['shop_id'],'smt'=>1));?>" >上架</a>
                                 <?php elseif($li['smt'] == 1): ?>
                               <a href="<?php echo U('SMT',array('shop_id'=>$li['shop_id'],'smt'=>0));?>" >下架</a><?php endif; ?>
                               <a href="<?php echo U('shopDel?shop_id='.$li['shop_id']);?>">删除</a>
                                 <?php if($li['recommend'] == 0): ?><a href="<?php echo U('recommend',array('shop_id'=>$li['shop_id'],'recommend'=>1));?>)}" >推荐</a>
                                 <?php elseif($li['recommend'] == 1): ?>
                               <a href="<?php echo U('recommend',array('shop_id'=>$li['shop_id'],'recommend'=>0));?>)}" >取消推荐</a><?php endif; ?>
                             </div>

                          </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                   </div>
                 </div>
                 <div>
                     <h3>我收藏的任务</h3>
                     <div class="taskbox">
                         <ul>
                             <?php if(empty($task_list)): ?><div class="shownone">
                                         <h3>抱歉！没有找到符合以上条件的任务</h3>
                                         <a href="<?php echo U('task/taskhall');?>">去收藏</a>
                                     </div>
                                 <?php else: ?>
                                 <?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                     <b class="pull-left"><img src="" alt=""></b>
                                     <h3>￥<?php echo ($vo["money"]); ?><span><?php echo ($vo["title"]); ?></span></h3>
                                     <p>
                                         <span><i><img src="/Public/img/ip1.png" class="autoimg" alt=""></i><?php echo ($vo["username"]); ?></span>
                                         <span><i><img src="/Public/img/ip4.png" class="autoimg" alt=""></i><?php echo ($vo["number"]); ?>人投标</span>
                                         <span><i><img src="/Public/img/ip3.png" class="autoimg" alt=""></i><?php echo (date('Y-m-d',$vo["time"])); ?></span>
                                         <span><i><img src="/Public/img/ip2.png" class="autoimg" alt=""></i><?php if($vo["type"] == 1): ?>赏金未托管<?php else: ?>赏金已托管<?php endif; ?></span>
                                     </p>
                                     <i><?php echo ($vo["content"]); ?></i>
                                     <i class="boxi"><?php echo ($vo["indus_id"]); ?></i><i class="boxi"><?php echo ($vo["indus_pid"]); ?></i>
                                     <a href="<?php echo U('task/delivery?task_id='.$vo['task_id']);?>" class="lookbox">查看</a>
                                 </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>


                         </ul>
                     </div>
                 </div>
                 <div>
                     <h3>我的投标记录</h3>
                     <form action="" method="post" class="form3">
                         <div class="btn-group btn-group-justified myjusti">
                             <div class="btn-group">
                                 <select name="task_model_id" >
                                     <option value="">全部</option>
                                     <?php if(is_array($task_model)): $i = 0; $__LIST__ = $task_model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                 </select>
                             </div>
                             <div class="btn-group">
                                 <input type="hidden" name="bid" value="1">
                                 <button type="button" class="btn btn-default btn-default3 mybuttonlh">搜索</button>
                             </div>
                         </div>
                     </form>
                     <div class="taskbox">
                         <ul class="mytasklj">
                             <?php if(empty(bid_list)): ?><div class="shownone mushow" >
                                     <h3>抱歉！没有投标记录</h3>
                                     <a href="<?php echo U('task/taskhall');?>">去收藏</a>
                                 </div>
                                 <?php else: ?>
                                 <?php if(is_array($bid_list)): $i = 0; $__LIST__ = $bid_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                         <b class="pull-left"><img src="" alt=""></b>
                                         <h3>￥<?php echo ($vo["money"]); ?><span><?php echo ($vo["title"]); ?></span></h3>
                                         <p>
                                             <span><i><img src="/Public/img/ip1.png" class="autoimg" alt=""></i><?php echo ($vo["username"]); ?></span>
                                             <span><i><img src="/Public/img/ip4.png" class="autoimg" alt=""></i><?php echo ($vo["number"]); ?>两人投标</span>
                                             <span><i><img src="/Public/img/ip3.png" class="autoimg" alt=""></i><?php echo (date('Y-m-d',$vo["time"])); ?></span>
                                             <span><i><img src="/Public/img/ip2.png" class="autoimg" alt=""></i><?php if($vo["type"] == 1): ?>赏金未托管<?php else: ?>赏金已托管<?php endif; ?></span>
                                         </p>
                                         <i><?php echo ($vo["content"]); ?></i>
                                         <i class="boxi"><?php echo ($vo["indus_id"]); ?></i><i class="boxi"><?php echo ($vo["indus_pid"]); ?></i>
                                         <a href="<?php echo U('task/delivery?task_id='.$vo['task_id']);?>" class="lookbox">查看</a>
                                     </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                         </ul>
                         <div class="shownone mushow" style="display: none">
                             <h3>抱歉！没有投标记录</h3>
                             <a href="<?php echo U('task/taskhall');?>">去收藏</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
          <div class="container-fluid flooreih marginTop">
              <div class="container">
                     <p class="boxp">友情链接:<a href="">欧安信</a><a href="">百度</a></p>
                     <p><a href="">关于我们</a><a href="">服务条款</a> <a href="">联系我们</a><a href="">网站地图</a>   <a href="">RSS订阅</a> </p> 
                     <p>公司名称:广州欧安信认证咨询有限公司 地址:广州市天河区黄村晨晖大厦D栋312 电话:18826268620<br>粤ICP备16016069号-2</p>    
              </div>
          </div>
         <div class="array">


         </div>
         <div class="tixh3" style="display: none">
             <div>
                 <h3>你还没有开店<a href="javascript:void(0);">x</a></h3>
                 <a href="javacript:void(0);">去开店</a>
             </div>
         </div>

         <script src="js/jquery-2.1.1.min.js"></script>
          <script type="text/javascript">
              var array2='<?php echo ($two_id); ?>';
              var array3='<?php echo ($there_id); ?>';
              var dx=[];
              var arr2=JSON.parse(array2);
              var arr3=JSON.parse(array3);
              var t="";
              var n1=0;
              $(function(){
                  $(".oneljh").click(function(){
                      $(".tixh3").css("display","block");
                  });
                  $(".tixh3>div h3 a").click(function(){
                      $(".tixh3").css("display","none");
                  });
                  $(".tixh3>div>a").click(function(){
                      $(".tixh3").css("display","none");
                      $(".oneljh").next().addClass("cur").siblings().removeClass("cur");
                      $(".onelj").addClass("cur").siblings().removeClass("cur");
                  });
              });
              golook();
              function golook(){
                  var a=$(".employerright .transaction .eavlbox3 p");
                  var b,c;
                  for(var i=0;i<a.length;i++){
                      b=a.eq(i).find("span");
                      c=a.eq(i).find("input");
                      b.eq(c.val()-1).addClass("cur");
                      if(b.eq(c.val()-1).hasClass("cur")){
                          b.eq(c.val()-1).prevAll("span").addClass("cur");
                      }
                  }
              }
           $(".employer .personalleft h3").click(function(){
              $(this).siblings("ul").toggleClass("cur");
           });
           $(".employer .personalleft a").click(function(){
            $(this).parents(".personalleft").find("li").removeClass("cur");
            $(this).parents("li").addClass("cur");
            var thistext=$(this).text()
            for(var i=0;i<$(".administr h3").length;i++){
               if(thistext===$(".administr>div>h3").eq(i).text()){
                  $(".administr>div").eq(i).addClass("cur").siblings().removeClass("cur");
               }
            }
           });
           $("#sname").blur(function(){
               var s=$(this).val();
               var str = Math.round(s*100)/100
               $(".fabu .form-box i").text(str);
              $(this).val(str);
           });
           $(".buttonfrom").click(function(){
              var inputs=$(this).parents("form").find("input,textarea");
              var a=0;
              for(var i=0;i<inputs.length;i++){
                 if(!inputs.eq(i).val()==""){
                    a++;
                    
                 }
              }
              if(a==inputs.length){
                  $(this).parents("form").submit()
              }
           });
              $(".indus").change(function () {
                  var html = '';
                  var thisvalue = $(this).val();
                  $.get("<?php echo U('publish/publish');?>", {industry_id: thisvalue}, function (msg) {
                      for (var key in msg) {
                          html += '<option value=' + '"' + msg[key].industry_id + '"' + ">" + msg[key].industry_name + "</option>"
                      }
                      $(".indus1").html(html);

                  });
              });
              $(".indus1").change(function () {
                  var html = '';
                  var html4 = '';
                  var t=$(this);
                  var thisvalue = $(this).val();
                  $.get("<?php echo U('publish/publish');?>", {industry_id: thisvalue}, function (msg) {
                      for (var key in msg) {
                          html += '<option value=' + '"' + msg[key].industry_id + '"' + ">" + msg[key].industry_name + "</option>";
                          html4+='<li><input name="Fruit[]" type="checkbox" value='+'"'+msg[key].industry_id+'"'+' /><span>'+msg[key].industry_name+'</span></li>'
                      }
                      $(".indus2").html(html);
                      if(t.parents(".onelj").hasClass("cur")){
                          $(".popup").css("display","block");
                          $(".popup ul").html(html4);
                      }

                  });
              });
              $(".popup .popupdiv a").click(function(){
                 $(this).parents(".popup").css("display","none");
              });
           $(function(){
               //服务
               var html,html1,html2;
               $('.btn-default1').click(function(){
                   $(".myserlj").html("");
                   $.post("<?php echo U(user/serprovider);?>",$('.form1').serialize(),function(msg){
                       if(msg[0]){
                           $(".mylistshow").css("display","none");
                       }else{
                           $(".mylistshow").css("display","block");
                       }
                       for(var k in msg){
                           html='<li>'+
                           '<b class="pull-left"><img src="" alt=""></b>'+
                           '<h3>￥'+msg[k].money+'<span>'+msg[k].title+'</span></h3>'+
                           '<p>'+
                           '<span><i><img src="/Public/img/ip1.png" class="autoimg" alt=""></i>'+msg[k].username+'</span>'+
                           '<span><i><img src="/Public/img/ip4.png" class="autoimg" alt=""></i>'+msg[k].number+'人投标</span>'+
                           '<span><i><img src="/Public/img/ip3.png" class="autoimg" alt=""></i>'+msg[k].time+'</span>'+
                           '<span><i><img src="/Public/img/ip2.png" class="autoimg" alt=""></i>'+msg[k].type+'</span>'+
                           '</p>'+
                           '<i>'+msg[k].content+'</i>'+
                           '<i class="boxi">'+msg[k].indus_id+'</i><i class="boxi">'+msg[k].indus_pid+'</i>'+
                           '<a href='+'"'+'/index.php/Home/task/delivery/task_id/'+msg[k].task_id+'.html'+'"'+'class="lookbox">'+"查看"+'</a>'+
                           '</li>'
                           $(".myserlj").append(html);
                       }
                   });
               })
               //交易评价
               $('.btn-default2').click(function(){
                   $(".myshowlj").html("");
                   $.post("<?php echo U(user/serprovider);?>",$('.form2').serialize(),function(msg){
                       if(msg[0]){
                           $(".myoneljh").css("display","none");
                       }else{
                           $(".myoneljh").css("display","block");
                       }
                       for(var k in msg){
                           html1='<div class="businesslists">'+
                           '<b class="pull-left autoimg" style="background-image: url('+msg[k].head+')"></b>'+
                           '<h3>'+msg[k].username+'<span>'+'好评率：100%'+'</span></h3>'+
                           '<p>提交于'+msg[k].time+'</p>'+
                           '<p class="dybusi">'+msg[k].content+'</p>'+
                           '<div class="eavlbox3">'+
                           '<p class="first-child">'+
                           '工作速度：'+
                           '<input type="hidden" value='+'"'+msg[k].sudu+'"/>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '</p>'+

                           '<p class="second-child">'+
                           '工作质量：'+
                           '<input type="hidden" value='+'"'+msg[k].zhiliang+'"/>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '</p>'+

                           '<p class="third-child">'+
                           '工作质量：'+
                           '<input type="hidden" value='+'"'+msg[k].taidu+'"/>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '<span class="glyphicon glyphicon-star"></span>'+
                           '</p>'+
                           '</div>'+
                           '</div>'
                           $(".myshowlj").append(html1);
                           var b,c;
                           var a=$(".employerright .transaction .eavlbox3 p");
                           for(var i=0;i< a.length;i++){
                               b=a.eq(i).find("span");
                               c=a.eq(i).find("input");
                               b.eq(c.val()-1).addClass("cur");
                               if(b.eq(c.val()-1).hasClass("cur")){
                                   b.eq(c.val()-1).prevAll("span").addClass("cur");
                               }
                           }
                       }
                   });
               });
               //我的投标记录
               $('.btn-default3').click(function(){
                   $(".mytasklj").html("");
                   $.post("<?php echo U(user/serprovider);?>",$('.form3').serialize(),function(msg){
                       console.log(msg);
                       if(msg[0]){
                           $(".mushow").css("display","none");
                       }else{
                           $(".mushow").css("display","block");
                       }
                       for(var k in msg){
                           html='<li>'+
                           '<b class="pull-left"><img src="" alt=""></b>'+
                           '<h3>￥'+msg[k].money+'<span>'+msg[k].title+'</span></h3>'+
                           '<p>'+
                           '<span><i><img src="/Public/img/ip1.png" class="autoimg" alt=""></i>'+msg[k].username+'</span>'+
                           '<span><i><img src="/Public/img/ip4.png" class="autoimg" alt=""></i>'+msg[k].number+'人投标</span>'+
                           '<span><i><img src="/Public/img/ip3.png" class="autoimg" alt=""></i>'+msg[k].time+'</span>'+
                           '<span><i><img src="/Public/img/ip2.png" class="autoimg" alt=""></i>'+msg[k].type+'</span>'+
                           '</p>'+
                           '<i>'+msg[k].content+'</i>'+
                           '<i class="boxi">'+msg[k].indus_id+'</i><i class="boxi">'+msg[k].indus_pid+'</i>'+
                           '<a href='+'"'+'/index.php/Home/task/delivery/task_id/'+msg[k].task_id+'.html'+'"'+'class="lookbox">'+"查看"+'</a>'+
                           '</li>'
                           $(".mytasklj").append(html);
                       }
                   })
               })
               $(".pro").change(function () {
                   var html = '';
                   var thisvalue = $(this).val();
                   $.get("<?php echo U('serprovider');?>", {upid: thisvalue}, function (msg) {
                       for (var key in msg) {
                           html += '<option value=' + '"' + msg[key].id + '"' + ">" + msg[key].name + "</option>"
                       }
                       $(".pro1").html(html);
                   });
               });
               $(function(){
                   $(".delete").click(function(){
                      var a=$(this).siblings(".boop").val();
                      var b=$(this).siblings(".opbox").attr('name');
                       var c=$(this).siblings("img");
                       $.post("<?php echo U('User/del_img');?>",{id:a,val:b},function(msg){
                        if(msg.status==1){
                            c.attr("src","");
                        }else{
                            alert("删除失败！")
                        }
                       });
                   });
               });
               //服务范围
               $(".menu .one_id,.menu>li>a").click(function(){
                   var h4="";
                   var div=""
                  var t=$(this);
                   if(t.prop("name")){
                       var l=t.prop("checked");
                   }else{
                       var l=true;
                   }
                   var text= t.parent().text();
                   var index= t.parents(".menu li").index();
                   var lengths=$(".menu>li").length;
                  var libox='';
                  var input='';
                  var formhr=t.parents(".tablefrom").serialize();
                  $(".twotr").css("display","block");
                   $.post("<?php echo U('Industry/one_indus');?>",formhr,function(msg){
                       for(var k in msg) {
                           if(text==msg[k].name) {
                               h4 += "<h4>" + msg[k].name + "</h4>";
                           }
                           for(var j in msg[k].list){
                               if(text==msg[k].name){
                                   if($.inArray(msg[k].list[j].industry_id,arr2)>=0){
                                       libox+='<li class="libox"><a href="javascript:void(0);" class="aa"><input type="checkbox" checked="checked" name="two_id[]" class="two_id" value='+'"'+msg[k].list[j].industry_id+'"'+'>'+msg[k].list[j].industry_name+'</a><div class="cfform"></div></li>';
                                   }else{
                                       libox+='<li class="libox"><a href="javascript:void(0);" class="aa"><input type="checkbox"  name="two_id[]" class="two_id" value='+'"'+msg[k].list[j].industry_id+'"'+'>'+msg[k].list[j].industry_name+'</a><div class="cfform"></div></li>';
                                   }
                               }
                           }
                       }
                       if(l==true){
                           $(".acfrom>form").append($('<ul/>').html(libox).prepend(h4));
                           input=t.parent().clone();
                           $(".serproaera .oneser").append(input);
                       }else{
                           n1++;
                           $(".acfrom>form>ul").eq(index).remove();
                           for(var i=0;i<$(".serproaera .oneser").find("a").length;i++){
                               if($(".serproaera .oneser").find("a").eq(i).text()==text){
                                   $(".serproaera .oneser").find("a").eq(i).remove();
                               }
                           }
                       }
                       if(n1==lengths){
                           $(".acfrom>form").html("");
                           $(".serproaera .oneser").html("");
                           n1=0;
                           $(".menu").css("display","none")
                       }
                   });
               });
               $(".select button").click(function(){
                   var t=$(this);
                   if(t.hasClass("cur")){
                       $(".select ul").css("display","none");
                       $(".twotr").css("display","none");
                       t.removeClass('cur');
                   }else{
                       $(".select ul").css("display","block");
                       $(".twotr").css("display","block");
                       t.addClass('cur');
                   }
               });
/*              $("body").not(".imfoup").cilck(function(){
                  $(".select ul").css("display","none");
                  $(".twotr").css("display","none");
                  $(".select button").removeClass('cur');
              });*/
               $(".acfrom").delegate('.two_id','click',function(){
                  two($(this));
               });
               $(".acfrom").delegate('.aa','click',function(){
                   two($(this));
               });
               $(".acfrom").delegate('.there_id','click',function(){
                   var t=$(this);
                   var l=t.prop("checked");
                   var text=t.parent().text()
                   if(l==true){
                       input= t.parent().clone();
                       $(".serproaera .thereser").append(input);
                   }else{
                       for(var i=0;i<$(".serproaera .thereser").find("a").length;i++){
                           if($(".serproaera .thereser").find("a").eq(i).text()==text){
                               $(".serproaera .thereser").find("a").eq(i).remove();
                           }
                       }
                   }
               });
               $(function(){

                   for(var i=0;i<$(".menu li").length;i++){
                       var t=$(".menu li").eq(i).find("input").prop("checked");
                       if(t==true){
                           $(".menu>li").eq(i).children("a").trigger("click")
                       }
                   }
                   var obj =setInterval(function(){
                       var lengths=$("#tbodyform").find("ul").length;
                       var minlengths=$("#tbodyform").find(".libox").length;
                       if(lengths>0){
                           clearInterval(obj)
                           for(var j=0;j<lengths;j++){
                               for(var h=0;h<minlengths;h++){
                                   var th=$("#tbodyform").find("ul").eq(j).find("input").eq(h).prop("checked");
                                   if(th==true){
                                       $("#tbodyform").find("ul").eq(j).find(".aa").eq(h).trigger("click");
                                   }
                               }
                           }
                       }
                   },500);
               });
           });

              function two(mythis){
                  var t=mythis;
                  var l=t.prop("checked");
                  if(t.prop("name")){
                      var l=t.prop("checked");
                      var text=t.parent().text()
                  }else{
                      var l=true;
                      var text=t.text()
                  }
                  var h4="";
                  var index= t.parents(".libox").index();
                  var libox='';
                  var indexs= t.parents("#tbodyform>ul").index();
                  var formhr= t.parents("#tbodyform").serialize();
                  $.post("<?php echo U('Industry/two_indus');?>",formhr,function(msg){
                      for(var k in msg) {
                          if(text==msg[k].name){
                              h4+="<h4>"+msg[k].name+"</h4>";
                          }
                          for(var j=0;j<msg[k].list.length;j++){
                              if(text==msg[k].name){
                                  if($.inArray(msg[k].list[j].industry_id,arr3)>=0){

                                      libox+='<li><a href="javascript:void(0);"><input type="checkbox" name="there_id[]" checked="checked"  class="there_id" value='+'"'+msg[k].list[j].industry_id+'"'+'>'+msg[k].list[j].industry_name+'</a></li>';
                                  }else{
                                      libox+='<li><a href="javascript:void(0);"><input type="checkbox" name="there_id[]"   class="there_id" value='+'"'+msg[k].list[j].industry_id+'"'+'>'+msg[k].list[j].industry_name+'</a></li>';
                                  }
                              }
                          }
                      }
                      if(l==true){
                          $("#tbodyform>ul").eq(indexs).find(".libox").eq(index-1).find(".cfform").html($("<ul/>").html(libox)).prepend(h4);
                          input= t.parent().clone();
                          $(".serproaera .twoser").append(input);
                          console.log(input)
                      }else{
                          $("#tbodyform>ul").eq(indexs).find(".libox").eq(index-1).find(".cfform").html("");
                          for(var i=0;i<$(".serproaera .twoser").find("a").length;i++){
                              if($(".serproaera .twoser").find("a").eq(i).text()==text){
                                  $(".serproaera .twoser").find("a").eq(i).remove();
                              }
                          }
                      }
                  });
              }
          </script>
    </body>
</html>