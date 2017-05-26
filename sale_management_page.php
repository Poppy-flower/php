<div id="my-tab" value="<?php echo $sale->sale_id;?>">
    <!-- Tab panes -->
    <div class="tab-content" id="my-tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="basic-info" aria-labelledby="basic-info-tab">
            <form action="" method="post" role="form" class="form-horizontal bucket-form" id="basic-info-form">
                <div class="form-group">
                    <label class="col-sm-4 control-label">特价水果标题</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="sale_title" name="order_no" value="<?php echo $sale->title;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果原价</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="sale_last_price" name="order_no" value="<?php echo $sale->last_price;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果现价</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="sale_now_price" name="real-name" value="<?php echo $sale->now_price;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果图片</label>
                    <div class="col-sm-8">
                        <img src="<?php echo $sale->photo;?>" id="sale_photo" alt="" style="height: 220px;width: 220px;">
                    </div>
                </div>
                <div class="form-group my-btn-group">
                    <span>
                        <button class="btn btn-success" id="basic-info-save">保存</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/iCheck/jquery.icheck.js"></script>
<script src="assets/js/sale_management_page.js"></script>


