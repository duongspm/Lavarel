@extends('welcome')
@section ('content')
<div class="logins">
    <div class="logins_title">
        <h2>Đăng nhập</h2>
        <p>Nếu bạn đã có tài khoản, đăng nhập tại đây</p>
    </div>
    <div class="logins_main">
        <div class="login_col">
            <div class="login_main">
                <label>Email</label>
                <p></p>
                <input id="email" name="email" type="text" placeholder="Nhập Email của bạn">
            </div>
        </div>
        <div class="login_col">
            <div class="login_main">
                <label>Mật khẩu</label>
                <p></p>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu của bạn">
            </div>
        </div>
        <div class="login_col">
            <div class="login_main">
                <div class="login_main_bottom">
                    <p>Bạn quên mật khẩu? Lấy lại mật khẩu</p>
                    <a id="open_popup_send_email" href="#">Tại đây</a>
                </div>
            </div>
        </div>
        <div class="login_col">
            <div class="login_main">
                <div class="login_main_bottom">
                    <button type="submit" id="login_submit" class="button">
                        <span>Đăng Nhập</span>
                    </button>
                    <span>Bạn chưa có tài khoản?</span>
                    <a href="{{URL::to('./register')}}">Đăng ký</a>
                </div>
            </div>
        </div>
        <div class="login_col">
            <div class="login_main">
                <div class="login_main_fire">
                    <a id="login_via_fb" href="#" class="login_fire">
                        <img src="https://static.smb.foolab.tech/images/471579c6eb194f569e0d38d3eab5e382.jpg" alt="login facebook">
                        <span>Facebook</span>
                    </a>
                    <a id="login_via_gg" href="#" class="login_fire">
                        <img src="https://file.hstatic.net/1000187248/file/icon_google_389d33cd8f004048a6a562f04b2de83f.png" alt="login google">
                        <span>Google</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection