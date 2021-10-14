@extends('welcome')
@section ('content')
<div id="right">
    <div class="registers">
        <div class="registers_title">
            <h2>Đăng ký</h2>
            <p>Nếu bạn chưa có tài khoản, điền các thông tin đăng ký tại đây</p>
        </div>
        <form action="{{URL::to('/register-customer')}}" method="POST">
            {{csrf_field()}}
            <div class="registerss_main">
                <div class="register_col">
                    <div class="register_main">
                        <label>Họ và tên</label>
                        <input name="customer_fullname" type="text" placeholder="Nhập họ và tên của bạn" required="required">
                    </div>
                </div>
                <div class="register_col">
                    <div class="register_main">
                        <label>Số điện thoại</label>
                        <input name="customer_phone" type="tel" placeholder="Nhập số điện thoại của bạn" required="required">
                    </div>
                </div>
                <div class="register_col">
                    <div class="register_main">
                        <label>Email</label>
                        <input name="customer_email" type="email" placeholder="Nhập Email của bạn" required="required">
                    </div>
                </div>
                <div class="register_col register_col_50">
                    <div class="register_col">
                        <div class="register_main">
                            <label>Mật khẩu</label>
                            <input name="customer_password" type="password" placeholder="Nhập mật khẩu của bạn" required="required">
                        </div>
                    </div>
                    <div class="register_col">
                        <div class="register_main">
                            <label>Nhập lại mật khẩu</label>
                            <input name="customer_password_again" type="password" placeholder="Nhập lại mật khẩu của bạn" required="required">
                        </div>
                    </div>
                </div>
                <div class="register_col register_col_50">
                    <div class="register_col">
                        <div class="register_main">
                            <label>Ngày sinh</label>
                            <input name="customer_date" type="date">
                        </div>
                    </div>
                    <div class="register_col">
                        <div class="register_main">
                            <label>Giới tính</label>
                            <div class="genders">
                                <div class="gender">
                                    <input name="customer_gender" id="gender_m" type="radio" name="gender" value="m">
                                    <label for="gender_m">
                                        <span class="sp_input"></span>
                                        <span class="sp_lable">Nam</span>
                                    </label>
                                </div>
                                <div class="gender">
                                    <div class="gender">
                                        <input name="customer_gender" id="gender_f" type="radio" name="gender" value="f">
                                        <label for="gender_f">
                                            <span class="sp_input"></span>
                                            <span class="sp_lable">Nữ</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register_col">
                    <div class="register_main">
                        <div class="register_main_bottom">
                            <button id="registers_submit" type="submit" class="button dark">
                                <span>Đăng ký</span>
                            </button>
                            <span>Bạn đã có tài khoản?</span>
                            <a href="{{URL::to('./login-checkout')}}">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
        
@endsection