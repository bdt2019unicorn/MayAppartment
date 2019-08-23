<!doctype html>
<html class="no-js" lang="">

    <head>
        @include("Layout/admin/1_head")
    </head>

    <body>
        <script src="<?php echo url('resources/views/Admin/Home');?>/login.js"></script>
        <form id="LoginForm" action="<?php echo url('Admin/Login/login');?>" method="post">

            {{ csrf_field() }}

            <div class="login-content" >
                <div class="nk-block toggled" id="l-login">
                    <div class="nk-form">
                        <div class="input-group">
                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                            <div class="nk-int-st">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="input-group mg-t-15">
                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                            <div class="nk-int-st">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <input type="submit" style="display:none;">
                        <a href="javascript:void(0);" onclick="$('#LoginForm').submit();" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>