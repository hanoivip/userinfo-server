@extends('hanoivip::layouts.app')

@section('content')
<div class="zidbody">
    <div class="zid_regform">
        <h2 class="formheader">Đăng ký</h2>
        <div id="reg_by_acc" class="zid_regbox" style="display:;position: relative;">
            <!--<div id="reg_by_acc" class="zid_regbox" style="position: relative;">-->
            <div id="regacc_loading" class="loadingfrm" style="margin: -18px">
                <img src="https://stc-id.zing.vn/login/images/loader.gif" style="height: 100px;padding-top: 150px;">
            </div>
            <p class="zid_regform_notice">Những thông tin có đánh dấu <span class="requiredfield_icn"></span>  là bắt buộc nhập.</p>
            
            <form id="frmRegAcc" name="frmRegAcc" method="post" action="{{ route('register') }}" enctype="application/x-www-form-urlencoded" >
                {{ csrf_field() }}                
                <div class="finput">
                    <em class="requiredfield_icn"></em>
                    <input class="input_login" tabindex="1" placeholder="Tài khoản" type="text" maxlength="40" name="name" id="name" autocomplete="off" value="">
                    
                </div>
                @if ($errors->has('name'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                <div class="finput">
                    <em class="requiredfield_icn"></em>
                    <input class="input_login" tabindex="4" type="password" placeholder="Mật khẩu" name="password" id="password" autocomplete="off">
                    
                </div>        
                @if ($errors->has('password'))
                        <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif 
                <div class="finput">
                    <em class="requiredfield_icn"></em>
                    <input class="input_login" tabindex="5" type="password" placeholder="Xác nhận Mật khẩu" name="password_confirmation" id="password-confirm" autocomplete="off">
                </div>    
                <div class="zidfbot">
                    <button type="submit" class="zid_regbtn">Đăng ký</button>
                    <div class="rtext">
                        Bằng việc click vào các nút <strong>Đăng ký</strong> bạn đã đồng ý <a  href="javascript:void(0)"><strong>Điều khoản sử dụng</strong></a>
                    </div>
                    <div class="clr"></div>
                </div>  
            </form>
        </div>
        <div class="otheracclogin" style="display: none;">
            <p class="htext">Hoặc đăng nhập với tài khoản khác</p>
            <ul class="accbtns">        
                <li><a class="fb_acc" href="javascript:void(0)" title="Facebook"><span class="acc_btnicn"></span>Facebook</a></li>
                <li><a class="gplus_acc" href="javascript:void(0)" title="Google+"><span class="acc_btnicn"></span>Google+</a></li>
                <li><a class="yahoo_acc" href="javascript:void(0)" title="Yahoo"><span class="acc_btnicn"></span>Yahoo</a></li>
            </ul>
        </div>
        <div class="backtologin">
            Nếu bạn đã có tài khoản {{ config('id.name.site') }}. Trở về <a href="{{ url('/') }}"><strong>Trang chủ</strong></a> để đăng nhập.
        </div>
    </div>
</div>
@endsection
