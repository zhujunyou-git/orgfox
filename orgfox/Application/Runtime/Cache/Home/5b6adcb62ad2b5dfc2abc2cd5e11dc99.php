<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script src="/Public/jquery.min.1.8.3.js"></script>
</head>
<body>
<script>
    $(function () {
        $('.aa').click(function(){alert(111);})
    });

</script>
<form action="<?php echo U('login/qwe');?>" enctype="multipart/form-data" method="post" >
    <input type="file" name="aa"/>
    <input type="submit" value="提交">

</form>
<button  class="aa" >按钮</button>


</body>
</html>