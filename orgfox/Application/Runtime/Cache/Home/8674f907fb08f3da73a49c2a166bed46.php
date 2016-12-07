<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>签约</title>
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
    <div class="treaty">
      <h3>重要提示：交易协议由你和服务商协商后签订。将作为交易过程的执行标准，一及纠纷仲裁的唯一依据！</h3>
      <div class="container">
        <p class="trename">信息服务协议</p>
        <form action="<?php echo U('task/treaty?task_pid='.$task_p['task_pid']);?>" id="form2" method="post">
          <h3 class="publich3">填写信息</h3>
          <div class="treform">
            <div>
              <p><span>甲方：</span><input type="text" name="armour" value="<?php echo ($agr['armour']); ?>" class="owner myof" placeholder="请输入" onchange="mygoing(this)"></p>
              <p><span>专职联系人：</span><input type="text" name="r_linkman" value="<?php echo ($agr['r_linkman']); ?>" class="linkman myof" placeholder="请输入" onchange="mygoing(this)"></p>
            </div>
              <?php if(empty($agr['armour_ok'])): ?><!--甲方已经签约放开乙方签字栏-->
                  <div>
                      <p><span>乙方：</span><input type="text" name="acetic" value="<?php echo ($agr['acetic']); ?>" class="owner own1" placeholder="请输入"
                                                readonly="readonly" onchange="mygoing(this)"></p>
                      <p><span>专职联系人：</span><input type="text" name="c_linkman" value="<?php echo ($agr['c_linkman']); ?>" class="linkman own1" placeholder="请输入"
                                                   readonly="readonly" onchange="mygoing(this)"></p>
                  </div>
                  <?php else: ?>
                  <div>
                      <p><span>乙方：</span><input type="text" name="acetic" value="<?php echo ($agr['acetic']); ?>" class="owner own1" placeholder="请输入"
                                                 onchange="mygoing(this)"></p>
                      <p><span>专职联系人：</span><input type="text" name="c_linkman" value="<?php echo ($agr['c_linkman']); ?>" class="linkman own1" placeholder="请输入"
                                                   onchange="mygoing(this)"></p>
                  </div><?php endif; ?>
              <input type="hidden" value="<?php echo ($agr['agr_status']); ?>" class="myif"/>
          </div>
          <h3 class="publich3">服务费用</h3>
          <div class="treform tretwo">
            <p><span>服务名称：</span><input type="text" name="title" value="<?php echo ($task['title']); ?>" class="owner myof" placeholder="请输入" readonly="readonly" onchange="mygoing(this)"></p>
            <p><span>金额：</span><input type="text"  name="money" value="<?php echo ($task['money']); ?>" class="linkman myof" placeholder="请输入" readonly="readonly" onchange="mygoing(this)"></p>
          </div>
          <h3 class="publich3">服务期限</h3>
          <div class="treform trethere">
            <i>协议服务期限为<em>0</em>天</i>
            <p><span>开始时间：</span><input type="text" name="start_time" value="<?php echo (date('Y-m-d',$agr['start_time']?$agr['start_time']:'')); ?>" class="linkman form_datetime myof" id="begin_time" placeholder="开始时间" readonly="readonly" onchange="mygoing(this)"></p>
            <p><span>结束时间：</span><input type="text" name="end_time" value="<?php echo (date('Y-m-d',$agr['end_time']?$agr['end_time']:'')); ?>" class="linkman form_datetime myof" id="end_time" placeholder="结束时间" readonly="readonly" onchange="mygoing(this)"></p>
            <script type="text/javascript">
                        $('#begin_time').datetimepicker({
                            format:'yyyy-mm-dd',
                            language:  'zh-CN',
                            //weekStart: 1,
                            //todayBtn:  1,
                            autoclose: true,
                            todayHighlight: 1,
                            startView: 2,
                            minView:"month",
                            forceParse: 0
                            //showMeridian: 1
                        }).on("changeDate",function(ev){
                            var transferdate=transferDate($("#begin_time").val());//转时间日期
                            $('#end_time').datetimepicker('remove');
                            $('#end_time').datetimepicker({
                                format:'yyyy-mm-dd',
                                language:  'zh-CN',
                                minView:"month",
                                autoclose: true,

                                'startDate':transferdate
                            }).on("changeDate",function(ev){
                                var enddate=$("#end_time").val();
                                setEndTime(enddate);
                            });
                        });
                        $('#end_time').datetimepicker({
                            format:'yyyy-mm-dd',
                            language:  'zh-CN',
                            minView:2,
                            autoclose: 1
                        }).on("changeDate",function(ev){
                            var enddate=$("#end_time").val();
                            setEndTime(enddate);
                        });
                        function setEndTime(enddate){
                            $('#begin_time').datetimepicker('remove');
                                $('#begin_time').datetimepicker({
                                    format:'yyyy-mm-dd',
                                    language:  'zh-CN',
                                    autoclose: 1,
                                    todayHighlight: 1,
                                    minView:"month",
                                    startView: 2,
                                    forceParse: 0,
                                    'endDate':transferDate(enddate)
                            });
                        }
                        //将时间字符串转为date
                        function transferDate(data){
                            var start_time=data;
                            var newTime= start_time.replace(/-/g,"-");
                            var transferdate = new Date(newTime);
                            return transferdate;
                        }
                        function transferTime(str){
                            var newstr=str.replace(/-/g,'-');
                            var newdate=new Date(newstr);
                            var time=newdate.getTime();
                            return time;
                        }
          </script>
          </div>
          <h3 class="publich3">双方责任</h3>
          <div class="treform trefour">
            <p>1.服务商开始工作前应和雇主确认服务内容及各阶段工作，双方无异议后开始工作。</p>
            <p>2.雇主支付首款后，服务商如在规定服务企期内无实质性进展，雇主有权全额退款。</p>
            <p>3.服务商完成阶段性工作，雇主应在三个工作日内予以回复，并支付当阶段内容。</p>
            <p>4.雇主应该严格按照与服务商签订的相关合作协议操作，如有欺骗和违规操作，服务商有权进行维权</p>
            <p>5.服务商在完成任务需求过程中如果因自身原因为完成雇主要求，雇主有权发起维权</p>
            <p>5.服务商在完成任务需求过程中如果因自身原因为完成雇主要求，雇主有权发起维权</p>
            <p>6.服务商确认协议后，需在（）内完成协议签署:雇主在服务商签署后（）内进行协议期签署：双方签署协议后，协议生效。</p>
          </div>
          <h3 class="publich3">协议签署流程</h3>
          <div class="treform trefive">
              <ul>
                <li>雇主发起协议</li>
                <li>服务商确认协议</li>
                <li>服务商已签署</li>
                <li>雇主已签署</li>
                <li>协议生效</li>
                <div class="cl"></div>
              </ul>
          </div>
          <h3 class="publich3">交易保障</h3>
          <div class="treform tresix">
            <p>服务商承诺证书真实性，并保证能够100%完成雇主任务需求。若服务商违背承诺，雇主有权发起维权。经判定维权成功，雇主可获得双倍赔偿（双倍赔偿由服务商的保证金赔付和服务商需求退还的交易
款项两部分构成）。</p>
            <p>
              <span><img src="/Public/img/op1.png" class="autoimg" alt="">保证完成任务</span>
              <span><img src="/Public/img/op3.png" class="autoimg" alt="">保证证件真实</span>
              <span><img src="/Public/img/op2.png" class="autoimg" alt="">保证维权</span>
            </p>
          </div>
          <h3 class="publich3">交易保障</h3>
          <div class="treform treseven">
            <div>
              <p><span>甲方代表（签字）：</span><input type="text" value="<?php echo ($agr['armour_ok']); ?>" name="armour_ok" class="owner myof" placeholder="请输入" onchange="mygoing(this)"></p>
            </div>
              <?php if(empty($agr['armour_ok'])): ?><!--甲方已经签约放开乙方签字栏-->
                  <div>
                      <p><span>乙方代表（签字）：</span><input type="text" value="<?php echo ($agr['acetic_ok']); ?>" name="acetic_ok" class="owner own1" placeholder="请输入"
                                                      readonly="readonly" onchange="mygoing(this)"></p>
                  </div>
                  <?php else: ?>
                  <div>
                      <p><span>乙方代表（签字）：</span><input type="text" value="<?php echo ($agr['acetic_ok']); ?>" name="acetic_ok" class="owner own1" placeholder="请输入"
                                                      onchange="mygoing(this)"></p>
                  </div>
                  <input type="hidden" name="id" value="<?php echo ($agr['id']); ?>"><!--当前协议ID--><?php endif; ?>
          </div>
          <div class="tre">
              <input type="hidden" name="task_id" value="<?php echo ($task_p['task_id']); ?>"><!--跳转页面-->
              <input type="hidden" name="task_pid" value="<?php echo ($task_p['task_pid']); ?>">
            <input type="button" class="sunmitbutton" value="确定">
            <input type="reset" name="reset" class="reset" value="取消" />
          </div>
        </form>
      </div>
    </div>
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
      function mygoing(t){
        if(t.value==""){
          t.style.border="1px solid red";
        }else{
          t.style.border="1px solid #d9d9d9";
        }
      }
      $(function(){
        $(".sunmitbutton").click(function(){
            var a=0;
            var myif=$(".myif").val();
            if(myif==null){
                var t=$(this).parents("#form2").find(".own1");
            }else{
                var t=$(this).parents("#form2").find(".myof");
            }
           for(var i=0;i<t.length;i++){
              if(t.eq(i).val()==""){
                t.eq(i).css("border","1px solid red");
              }else{
                t.eq(i).css("border","1px solid #d9d9d9");
                a++;
              }
           }
           if(a==t.length){
            t.parents("#form2").submit();
           }
        });
          var begin_time="";
          var end_time="";
          $("#begin_time").change(function(){
              btnCount_Click()
          });
          $("#end_time").change(function(){
              btnCount_Click()
          });

      });
      function  btnCount_Click(){
          s1  =  $("#begin_time").val();
          s2  =  $("#end_time").val();
          $(".trethere i em").text(
                  DateDiff(s1,s2)
          )
      }

      function  DateDiff(sDate1,  sDate2){
          var  aDate,  oDate1,  oDate2,  iDays
          aDate  =  sDate1.split("-")
          oDate1  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])
          aDate  =  sDate2.split("-")
          oDate2  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])
          iDays  =  parseInt(Math.abs(oDate1  -  oDate2)  /  1000  /  60  /  60  /24)
          return  iDays
      }

    </script>
  </body>
</html>