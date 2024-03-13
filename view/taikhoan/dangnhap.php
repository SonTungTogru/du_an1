<div class="content">
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Sign In
                    </h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <p class="auth-sgt">or sign in with:</p>
                    </div>
                    <form class="login-form" action="index.php?act=dangnhap" method="post">
                        <input type="text" name="username" class="auth-form-input" placeholder="username">
                        <div class="input-icon">
                            <input type="password" name="pass" class="auth-form-input" placeholder="Password">
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <label class="btn active">
                            <input type="checkbox" name='email' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span> Remember password.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Đăng nhập" name="dangnhap" class="auth-submit">
                            <a href="register.html" class="auth-btn-direct">Đăng ký</a>
                        </div>
                    </form>
                    <div class="auth-forgot-password">
                        <a href="index.php?act=quenmk">Forgot Password</a>
                        <h2 class="thongbao">
                        <?php 
                if(isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
            ?>
                        </h2>
                    </div>
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