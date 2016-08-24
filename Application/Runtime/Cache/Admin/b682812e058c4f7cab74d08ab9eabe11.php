<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台管理</title>
<link rel="stylesheet" href="/Public/css/backstage.css">
</head>

<body>

    <div class="head">
    <div class="logo fl"><a href="<?php echo U('Index/index');?>"></a></div>
    <h3 class="head_text fr">电子商务后台管理系统</h3>
</div>
    <div class="operation_user clearfix">
    <div class="link fl"><a href="<?php echo U('Index/index');?>">系统信息</a></div>
    <div class="link fr">
        <span>欢迎您，管理员<?php echo session('username');?></span><a href="<?php echo U('Index/index');?>" class="icon icon_i">首页</a><span></span><a href="#" class="icon icon_j">前进</a><span></span><a href="#" class="icon icon_t">后退</a><span></span><a href="#" class="icon icon_n">刷新</a><span></span><a href="<?php echo U('login/logout');?>" class="icon icon_e">退出</a>
    </div>
</div>

    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">管理员列表</div>
                <div class="details">
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0" style="text-align:center;">
                        <thead>
                            <tr>
                                <th width="15%">ID</th>
                                <th width="25%">姓名</th>
                                <th width="25%">邮箱</th>
                                <th width="25%">注册时间</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 循环出基本信息 -->
                            <?php if(is_array($listArr)): $i = 0; $__LIST__ = $listArr;if( count($__LIST__)==0 ) : echo "暂时没有数据！！！" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($v["id"]); ?></td>
                                    <td><?php echo ($v["username"]); ?></td>
                                    <td><?php echo ($v["email"]); ?></td>
                                    <td><?php echo (date("Y-m-d H:i:s",$v["regtime"])); ?></td>
                                </tr><?php endforeach; endif; else: echo "暂时没有数据！！！" ;endif; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--左侧列表-->
<div class="menu">
    <div class="cont">
        <div class="title">管理员</div>
        <ul class="mList">
            <li>
                <h3><span>-</span>商品管理</h3>
                <dl>
                    <dd><a href="#">商品修改</a></dd>
                    <dd><a href="#">商品分类</a></dd>
                </dl>
            </li>
            <li>
                <h3><span>-</span>分类管理</h3>
                <dl>
                    <dd><a href="#">分类修改</a></dd>
                    <dd><a href="#">分类</a></dd>
                </dl>
            </li>
            <li>
                <h3><span>-</span>订单管理</h3>
                <dl>
                    <dd><a href="#">订单修改</a></dd>
                    <dd><a href="#">订单又修改</a></dd>
                    <dd><a href="#">订单总是修改</a></dd>
                    <dd><a href="#">测试内容你看着改</a></dd>
                </dl>
            </li>

            <li>
                <h3><span>-</span>用户管理</h3>
                <dl>
                    <dd><a href="#">用户修改</a></dd>
                </dl>
            </li>
            <li>
                <h3><span>-</span>管理员管理</h3>
                <dl>
                    <dd><a href="<?php echo U('Admin/addadmin');?>">添加管理员</a></dd>
                    <dd><a href="<?php echo U('Admin/index');?>">管理员列表</a></dd>
                </dl>
            </li>
        </ul>
    </div>
</div>

    </div>
</body>
</html>