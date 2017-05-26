<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="<?php echo site_url();?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Detail - Floral Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

</script>
    
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

</head>

<body>

<div id="templatemo_wrapper_sp">
<div id="templatemo_header_wsp">
	<div id="templatemo_header" class="header_subpage">
    	<div id="site_title"><a href="#">Floral Shop</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index" class="selected index">主页</a></li>
                <li><a href="index/product" class="all2">所有商品</a></li>
                <li><a>分类</a>
                    <ul>
                        <?php foreach ($kind as $v){?>
                            <li><a href="index/index_kind/<?php echo $v->kind_id?>"><?php echo $v->kind?></a></li>
                        <?php }?>
                    </ul>
                </li>
                <li><a href="index/login2">进入管理系统</a></li>
                <?php if($status==0){
                    echo '<li><a href="index/login">登陆</a></li>';
                }else if($status==1){
                    echo '<li><a href="index/go_car">进入购物车</a></li><li><a href="index/select_order">查看我的订单</a></li><li><a href="index/delete_login">退出登陆</a></li>';
                }?>
            </ul>
            <div id="templatemo_search">
                <form action="index/search" method="post">
                    <input type="text" value="请输入名称" name="keyword" id="keyword" title="keyword"
                           onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
       
    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>本店承诺</h3>
            <div class="content">
                <ul class="sidebar_list">
                    <li><a>保证水果新鲜</a></li>
                    <li><a>保证价格最低</a></li>
                    <li><a>不打农药，纯绿色</a></li>
                    <li><a>种类齐全</a></li>
                    <li><a>激素少</a></li>
                    <li><a>网上可以下单</a></li>
                    <li><a>周围2公里可以免费配送</a></li>
                    <li><a>网上支付立减活动</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3 id="h3">今日特价</h3>
            <div class="content special">
                <img src="<?php echo $sale->photo?>" alt="Flowers" />
                <a href="#"><?php echo $sale->title?></a>
                <p>
                    Price:
                    <span class="price normal_price"><?php echo $sale->last_price?>元/斤</span>&nbsp;&nbsp;
                    <span class="price special_price"><?php echo $sale->now_price?>元/斤</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
      	<h2><?php echo $fruit->name?></h2>
        <div class="content_half left">
        	<a  rel="lightbox" href="images/product/image_01_l.jpg"><img src="<?php echo $fruit->photo?>" alt="yellow flowers" style="height: 165px;width: 165px;"/></a>
        </div>
            <div class="content_half right">
                <table>
                    <tr>
                        <td width="130">价钱:</td>
                        <td width="84"><?php echo $fruit->price?>元/斤</td>
                    </tr>
                    <tr>
                        <td width="130">种类:</td>
                        <td width="84"><?php echo $fruit->price?></td>
                    </tr>
                </table>
                <div class="cleaner h20"></div>
                <button class="add-car" fruit_id="<?php echo $fruit->fruit_id?>"  status="<?php echo $status?>">添加购物车</button>
			</div>
            <div class="cleaner h40"></div>
            
            <h4>产品描述</h4>
            <p><?php echo $fruit->description?></p>
            <div class="cleaner h40"></div>
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	<div class="footer_left">
    	<a href="#"><img src="images/1311260370_paypal-straight.png" alt="Paypal" /></a>
        <a href="#"><img src="images/1311260374_mastercard-straight.png" alt="Master" /></a>
        <a href="#"><img src="images/1311260374_visa-straight.png" alt="Visa" /></a>
    </div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>
<script src="js/index.js"></script>
</body>
</html>