<div id="my-tab" value="<?php echo $user->user_id;?>">
    <!-- Tab panes -->
    <div class="tab-content" id="my-tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="basic-info" aria-labelledby="basic-info-tab">
            <form action="" metho="post" role="form" class="form-horizontal bucket-form" id="basic-info-form">
                <div class="form-group">
                    <label class="col-sm-4 control-label">用户编号</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="blog_id" name="order_no" value="<?php echo $user->user_id;?>" readonly="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">用户姓名</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="user_name" name="order_no" value="<?php echo $user->name;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">用户电话</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="user_tel" name="real-name" value="<?php echo $user->tel;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">登陆密码</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="user_pass" name="real-name" value="<?php echo $user->pass;?>">
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
<script src="assets/js/user_management_page.js"></script>


