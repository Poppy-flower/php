<div id="my-tab" value="<?php echo $fruit->fruit_id;?>">
    <!-- Tab panes -->
    <div class="tab-content" id="my-tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="basic-info" aria-labelledby="basic-info-tab">
            <form action="" method="post" role="form" class="form-horizontal bucket-form" id="basic-info-form">
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果编号</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="order_no" name="order_no" value="<?php echo $fruit->fruit_id;?>" readonly="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果名称</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fruit_name" name="order_no" value="<?php echo $fruit->name;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果单价</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fruit_price" name="real-name" value="<?php echo $fruit->price;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果种类</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fruit_kind_id" name="real-name" value="<?php echo $fruit->kind_id;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果图片</label>
                    <div class="col-sm-8">
                        <img src="<?php echo $fruit->photo;?>" id="fruit_img" alt="" style="height: 220px;width: 220px;">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果介绍</label>
                    <div class="col-sm-8">
                        <textarea name="real-name" id="fruit_description" class="form-control text" style="height: 200px;width: 500px;"><?php echo $fruit->description;?></textarea>
                    </div>
                </div>
                <div class="form-group my-btn-group">
                    <span>
                        <button class="btn btn-success" id="basic-info-save">保存</button>
                         <button class="btn btn-success" id="basic-info-delete">删除</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/iCheck/jquery.icheck.js"></script>
<script src="assets/js/fruit_management_page.js"></script>


