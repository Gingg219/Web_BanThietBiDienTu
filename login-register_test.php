<!-- Begin: modal-login-regisyter  -->

    <div class="modal" style="display: none;">
        <div class="modal__overlay" style="display: none;"></div>

        <div class="modal__body" style="display: none;">  
            <div class="auth-form" id="login">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Nhập</h3>
                        <span class="auth-form__switch-btn" id="showLogin">Đăng Ký</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="email" placeholder="Email..." class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Password..." class="auth-form__input">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn btn--normal auth-form__control-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class=" auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-tittle">Kết nối với Facebook</span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class=" auth-form__socials-icon fab fa-google"></i>
                        <span class="auth-form__socials-tittle">Kết nối với Google</span>
                    </a>
                </div>
            </div>

            <div class="auth-form" id="register" style="display: none;">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <span class="auth-form__switch-btn" id="showRegister">Đăng Nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="email" placeholder="Email..." class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Password..." class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Xác nhận Password..." class="auth-form__input">
                        </div>
                    </div>

                    <div class="auth-form-aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký bạn đã đồng ý với CellPhoneW về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> & 
                            <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn btn--normal auth-form__control-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class=" auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-tittle">Kết nối với Facebook</span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class=" auth-form__socials-icon fab fa-google"></i>
                        <span class="auth-form__socials-tittle">Kết nối với Google</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- End: model-login-register  -->

<script>
    const modal= document.getElementsByClassName("modal")
    const modalOverlay= document.getElementsByClassName("modal__overlay")
    const modalBody= document.getElementsByClassName("modal__body")
    const login= document.getElementsById("login")
    const register= document.getElementsById("register")
    const showRegister = document.getElementById("showRegister")
    const showLogin = document.getElementById("showLogin")
    const loginForm= document.getElementsById("loginForm")

    if(loginForm) {
        loginForm.onclick = (e) => {
            modal.style.display = "block";
            modalOverlay.style.display = "block";
            modalBody.style.display = "block";
        }
    }

    if(showRegister) {
        showRegister.onclick = (e) => {
            login.style.display = "none";
            register.style.display = "block";
        }
    }
        
    if(showLogin) {
        showLogin.onclick = (e) => {
            register.style.display = "none";
            login.style.display = "block";
        }
    }
</script>