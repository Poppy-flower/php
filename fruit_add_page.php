<div id="my-tab">
    <!-- Tab panes -->
    <div class="tab-content" id="my-tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="basic-info" aria-labelledby="basic-info-tab">
            <form action="" metho="post" role="form" class="form-horizontal bucket-form" id="basic-info-form">
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果名称</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fruit_name" name="real-name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果单价</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fruit_price" name="real-name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果种类</label>
                    <div class="col-sm-8 square-blue icheck">

                        <div class="radio">
                            <select name="" id="fruit_kind" style="width: 200px;margin-left:-20px;border-radius: 5px;height: 30px;">
                                <?php foreach ($kind as $v){?>
                                    <option value="<?php echo $v->kind_id?>"><?php echo $v->kind?></option>
                                <?php }?>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">水果介绍</label>
                    <div class="col-sm-8">
                        <textarea name="real-name" id="fruit_description" class="form-control text" style="height: 200px;width: 500px;"></textarea>
                    </div>
                </div>
                <div class="form-group my-btn-group">
                    <span>
                        <button class="btn btn-success" id="basic-info-add">添加</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/iCheck/jquery.icheck.js"></script>
<script src="assets/js/fruit_management_page.js"></script>


