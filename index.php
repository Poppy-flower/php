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
<title>Floral HTML CSS Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
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

<div id="templatemo_wrapper_h">
<div id="templatemo_header_wh">
	<div id="templatemo_header" class="header_home">
    	<div id="site_title"><a href="#">Floral Shop</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index/index" class="selected">主页</a></li>
                <li><a href="index/product">所有商品</a></li>
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

        <div class="slider-wrapper theme-orman">
<!--            轮播图-->
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="images/portfolio/01.jpg" alt="slider image 1"/>
                <img src="images/portfolio/02.jpg" alt="slider image 2"/>
                <img src="images/portfolio/03.jpg" alt="slider image 3"/>
                <img src="images/portfolio/04.jpg" alt="slider image 4"/>
                <img src="images/portfolio/05.jpg" alt="slider image 5"/>
            </div>
        </div>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
				controlNav:false
			});
        });
        </script>
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
		<h2>欢迎光临本水果商店</h2>
		<p>本店每日为您提供新鲜水果，您可以查看所有水果，也可以按照您的需求查找想要的水果，点击即可加入购物车，在购物车中管理你选择的水果，网上支付更有立减活动，如果你距离本店2000米范围内，还可享受到送货上门的热情服务</p>
        <?php foreach ($fruit as $a){?>
        <div class="product_box">
            <a href="productdetail.php"><img src="<?php echo $a->photo?>" alt="floral set 1" style="height: 165px;width: 165px;"/></a>
      		<h3><?php echo $a->name?></h3>
            <p class="product_price"><?php echo $a->price?>元/斤</p>
            <p class="add_to_cart">
                <a href="index/detail/<?php echo $a->fruit_id?>">详情</a>
<!--                <a href="index/add_car/--><?php //echo $a->fruit_id?><!--">添加到购物车</a>-->
                <button class="add-car" fruit_id="<?php echo $a->fruit_id?>" status="<?php echo $status?>">添加购物车</button>
            </p>
        </div>        	
        <?php }?>
        
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

<script type="text/javascript"  src="js/index.js"></script>
</body>
</html>