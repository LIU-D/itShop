<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/itshop/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/itshop/Public/Admin/js/jquery.js"></script>
    <script type="text/javascript">
    $(function() {
        //导航切换
        $(".menuson li").click(function() {
            $(".menuson li.active").removeClass("active")
            $(this).addClass("active");
        });

        $('.title').click(function() {
            var $ul = $(this).next('ul');
            $('dd').find('ul').slideUp();
            if ($ul.is(':visible')) {
                $(this).next('ul').slideUp();
            } else {
                $(this).next('ul').slideDown();
            }
        });
    })
    </script>
</head>

<body style="background:#f0f9fd;">
    <div class="lefttop"><span></span>※ MENU ※</div>
    <dl class="leftmenu">
        <dd>
            <div class="title">
                <span><img src="/itshop/Public/Admin/images/leftico01.png" /></span>商品管理
            </div>
            <ul class="menuson">
                <li class="active">
                    <cite></cite><a href="<?php echo U('Goods/index');?>" target="rightFrame">商品列表</a><i></i></li>
                <li>
                    <cite></cite><a href="<?php echo U('Goods/addGoods');?>" target="rightFrame">添加商品</a><i></i></li>
            </ul>
        </dd>
        <dd>
            <div class="title"><span><img src="/itshop/Public/Admin/images/leftico03.png" /></span>分类管理</div>
            <ul class="menuson">
                <li>
                    <cite></cite><a href="<?php echo U('Cate/index');?>" target="rightFrame">分类列表</a><i></i></li>
                <li>
                    <cite></cite><a href="<?php echo U('Cate/addCate');?>" target="rightFrame">添加分类</a><i></i></li>
            </ul>
        </dd>
        <dd>
            <div class="title">
                <span><img src="/itshop/Public/Admin/images/leftico02.png" /></span>订单管理
            </div>
            <ul class="menuson">
                <li>
                    <cite></cite><a href="#">留言管理</a><i></i></li>
                <li>
                    <cite></cite><a href="#">评论管理</a><i></i></li>
            </ul>
        </dd>
        <dd>
            <div class="title"><span><img src="/itshop/Public/Admin/images/leftico04.png" /></span>权限管理</div>
            <ul class="menuson">
                <li>
                    <cite></cite><a href="#">用户管理</a><i></i></li>
                <li>
                    <cite></cite><a href="#">用户组设置</a><i></i></li>
                <li>
                    <cite></cite><a href="#">权限设置</a><i></i></li>
                <li>
                    <cite></cite><a href="#">其他</a><i></i></li>
            </ul>
        </dd>
    </dl>
</body>

</html>