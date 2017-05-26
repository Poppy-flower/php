<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <base href="<?php echo site_url();?>">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>导师管理</title>

    <!--data table-->
    <link rel="stylesheet" href="assets/js/data-tables/DT_bootstrap.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker-custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datetimepicker/css/datetimepicker-custom.css" />
    <link href="assets/js/iCheck/skins/square/blue.css" rel="stylesheet">
    <link href="assets/js/iCheck/skins/square/red.css" rel="stylesheet">
    <link href="assets/js/iCheck/skins/square/green.css" rel="stylesheet">
    <link href="assets/js/iCheck/skins/flat/blue.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/lib/FontAwesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/js/right-dialog/jquery-right-dialog-1.0.css"/>
    <link rel="stylesheet" href="assets/css/iv_order_management_page.css">
    <link rel="stylesheet" href="assets/css/iv_order_management.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="sticky-header">
<div id="left">
    <ul>
        <a href="management/index"><li>水果管理</li></a>
        <a href="management/user_management"><li>个人信息管理</li></a>
        <a href="management/sale_fruit_management"><li>特价水果管理</li></a>
        <a href="index"><li>返回到主页</li></a>
    </ul>
</div>
<section>
    <div class="main-content" >
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            个人信息管理
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="btn-group">
                                <button id="add-new-tutor" class="btn btn-primary">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th>用户编号</th>
                                    <th>姓名</th>
                                    <th>电话</th>
                                    <th>密码</th>
                                    <th>编辑</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($user as $v){?>
                                    <tr class="" value="<?php echo $v->user_id;?>">
                                        <td><?php echo $v->user_id;?></td>
                                        <td><?php echo $v->name;?></td>
                                        <td><?php echo $v->tel;?></td>
                                        <td><?php echo $v->pass;?></td>
                                        <td><a class="edit" href="javascript:;"><i class="icon-edit"></i></a></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                            <div class="page">
                                <span class="page-span">
                                    <?php echo $links;?>
                                </span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>







</section>
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="assets/js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/js/data-tables/DT_bootstrap.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/user_management.js"></script>
<script src="assets/js/right-dialog/jquery-right-dialog-1.0.js"></script>
</body>
</html>
