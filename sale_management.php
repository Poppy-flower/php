<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo site_url();?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">
    <title>特价水果管理</title>

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
                            特价水果管理
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th>特价水果宣传标题</th>
                                    <th>水果原价</th>
                                    <th>水果现价</th>
                                    <th>编辑</th>
                                    <th>特价水果图片上传</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="" value="<?php echo $sale->sale_id;?>">
                                        <td><?php echo $sale->title;?></td>
                                        <td><?php echo $sale->last_price;?></td>
                                        <td><?php echo $sale->now_price;?></td>
                                        <td><a class="edit" href="javascript:;"><i class="icon-edit"></i></a></td>
                                        <td>
                                            <form action="management/send_sale" method="post" enctype="multipart/form-data" class="change">
                                                <input type="file" name="blog-img">
                                                <input type="hidden" value="<?php echo $sale->sale_id?>" name="sale_id">
                                                <input type="submit" value="保存">
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
<script src="assets/js/sale_management.js"></script>
<script src="assets/js/right-dialog/jquery-right-dialog-1.0.js"></script>
</body>
</html>
