<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/itshop/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/itshop/Public/Admin/js/jquery.js"></script>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">表单</a></li>
        </ul>
    </div>
    <div class="formbody">
        <div class="formtitle"><span>基本信息</span></div>
        <form action="<?php echo U('addOK');?>" method="post" enctype="multipart/form-data">
            <ul class="forminfo">
                <li>
                    <label>商品名称</label>
                    <input name="name" placeholder="请输入商品名称" type="text" class="dfinput" /><i>名称不能超过30个字符</i></li>
                <li>
                    <label>商品价格</label>
                    <input name="price" placeholder="请输入商品价格" type="text" class="dfinput" /><i></i></li>
                <li>
                    <label>商品数量</label>
                    <input name="num" placeholder="请输入商品数量" type="text" class="dfinput" />
                </li>
                <li>
                    <label>商品logo</label>
                    <input name="f" type="file" />
                </li>
                <li>
                    <label>商品分类</label>
                    <select class="dfinput" name="cateid">
                        <option>--请选择--</option>
                        <?php if(is_array($cate_list)): foreach($cate_list as $key=>$vo): ?><option value="<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["cate_name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </li>
                <li>
                    <label>是否上架</label>
                    <cite>
                    <input name="isdel" type="radio" value="上架" checked="checked" />上架&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="" type="radio" value="下架" />下架
                    </cite>
                </li>
                <li>
                    <label>商品描述</label>
                    <textarea name="desc" placeholder="请输入商品描述" cols="" rows="" class="textinput"></textarea>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <input name="" id="btnSubmit" type="submit" class="btn" value="确认保存" />
                </li>
            </ul>
        </form>
    </div>
</body>

</html>