<div class="content">
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        FORGOT PASSWORD
                    </h2>

                    <form class="login-form" action="index.php?act=laymk" method="POST">
                        <input type="email" class="auth-form-input" placeholder="Email" name="email">
                        <!-- <label class="btn active">
                                <input type="checkbox" name='email' checked>
                                <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                                <span> Remember password.</span>
                            </label> -->
                        <?php
                        if (isset($thongbao) && $thongbao !== '')
                            echo $thongbao

                        ?>
                        <div class="footer-action">
                            <input type="submit" value="gửi" name="gui" class="auth-submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image">
                    <img src="assets/images/vector.jpg" alt="login">
                </div>
            </div>
        </div>
    </div>
</div>