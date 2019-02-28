@extends('hanoivip::layouts.app')

@section('content')
<div class="zidbody">
                <div class="zid_loginform" style="position: relative;">
    <div id="login-loading" class="loadingfrm" style="margin: -15px -20px;">
        <img src="https://stc-id.zing.vn/login/images/loader.gif" style="height: 100px;padding-top:70px;" />       
    </div>
    <h2 class="formheader">Đăng nhập</h2> <form id="frmLogin"   name="frmLogin" action="{{ route('login') }}" method="post" enctype="application/x-www-form-urlencoded" >
        {{ csrf_field() }}
        <p class="finput">
            <input tabindex="1" value="" autocomplete="off"  class="input_login" type="text" name="email_username_phone" id="email_username_phone" placeholder="Tên, email hoặc số điện thoại" />
           

        </p>
         @if ($errors->has('email_username_phone'))
                <span class="help-block">
                    <strong style="color: red;">{{ $errors->first('email_username_phone') }}</strong>
                </span>
            @endif
        <p class="finput">
            <input  type="password" class="input_login"  name="password" id="password" placeholder="Mật khẩu"  tabindex="2" />
           
        </p>
         @if ($errors->has('password'))
                <span class="help-block">
                    <strong style="color: red;">{{ $errors->first('password') }}</strong>
                </span>
            @endif
        <div class="zidfbot">
            <button type="submit" class="zidsignin_btn">Đăng nhập</button>
            <p><a href="{{ route('password.request') }}">Quên mật khẩu?</a></p>
        </div>
    </form>

</div>
<div class="zidlogincont">
    <p class="txtintro">
        Chỉ với một tài khoản {{ config('id.name.site') }},<br> 
        sử dụng được tất cả các sản phẩm của {{ config('id.name.team') }}.
    </p>
    <p><a href="{{ route('register') }}" class="zidregbtn" title="Đăng ký ngay">Đăng ký ngay</a></p>
    <div class="otheracclogin" style="display: none;">
        <p class="htext">Hoặc đăng nhập với tài khoản khác</p>
        <ul class="accbtns">        
            <li><a class="fb_acc" href="javascript:void(0)" title="Facebook"><span class="acc_btnicn"></span>Facebook</a></li>
            <li><a class="gplus_acc" href="javascript:void(0)" title="Google+"><span class="acc_btnicn"></span>Google+</a></li>
            <li><a class="yahoo_acc" href="javascript:void(0)" title="Yahoo"><span class="acc_btnicn"></span>Yahoo</a></li>
        </ul>
    </div>
</div>
<div class="clr"></div>

            <div class="qcbanner_login" style="display:none;">
                <div class="zid_promote">
                    <h3><em class="htitle_icon"></em>Các sản phẩm sử dụng {{ config('id.name.site') }}</h3>
                    <div class="app_suggestion clearfix">
                        <ul id ="listapp">  
                            
                            <li>
                                <span class="appitem_medal"></span>
                                <div class="appitem_wrapper">
                                    <a  href="javascript:void(0);" class="game_thumb hot">
                                        <em class=""></em>
                                        <img src="/img/nl.jpg" alt="dkv" width="110px" height="110px">
                                    </a>
                                    <p class="appname">
                                        <a  href="javascript:void(0);">Ngọa Long</a>
                                    </p>
                                    <p class="app_usecounter" style="font-size: 11px;">0 lượt chơi</p>
                                </div>
                            </li>
                            
                            <li>
                                <span class="appitem_medal"></span>
                                <div class="appitem_wrapper">
                                    <a  href="javascript:void(0);" class="game_thumb hot">
                                        <em class=""></em>
                                        <img src="/img/logo-dota-truyen-ky.jpg" alt="vltkw" width="110px" height="110px">
                                    </a>
                                    <p class="appname">
                                        <a  href="javascript:void(0);">Dota Truyền Kỳ</a>
                                    </p>
                                    <p class="app_usecounter" style="font-size: 11px;">0 lượt chơi</p>
                                </div>
                            </li>
                            
                            <!--<li>
                                <span class="appitem_medal"></span>
                                <div class="appitem_wrapper">
                                    <a  href="javascript:void(0);" class="game_thumb hot">
                                        <em class=""></em>
                                        <img src="http://2.s110.appstore.zdn.vn/Thanh-Van-Chi/7/thanhvanchi-110-1.jpg" alt="thanhvanchi">
                                    </a>
                                    <p class="appname">
                                        <a  href="javascript:void(0);">Thanh Vân Chí</a>
                                    </p>
                                    <p class="app_usecounter" style="font-size: 11px;">0 lượt chơi</p>
                                </div>
                            </li>
                            
                            <li>
                                <span class="appitem_medal"></span>
                                <div class="appitem_wrapper">
                                    <a  href="javascript:void(0);" class="game_thumb hot">
                                        <em class=""></em>
                                        <img src="http://9.s110.appstore.zdn.vn/Kiem-Vu/39/kiemvu-110-1.jpg" alt="kiemvu">

                                    </a>
                                    <p class="appname">
                                        <a  href="javascript:void(0);">Kiếm Vũ</a>
                                    </p>
                                    <p class="app_usecounter" style="font-size: 11px;">0 lượt chơi</p>
                                </div>
                            </li>
                            
                            <li>
                                <span class="appitem_medal"></span>
                                <div class="appitem_wrapper">
                                    <a  href="javascript:void(0);" class="game_thumb hot">
                                        <em class=""></em>
                                        <img src="http://d.s110.appstore.zdn.vn/Gunny/397/gunny-110-1.jpg" alt="gunny">
                                    </a>
                                    <p class="appname">
                                        <a href="javascript:void(0);">Gunny</a>
                                    </p>
                                    <p class="app_usecounter" style="font-size: 11px;">0 lượt chơi</p>
                                </div>
                            </li>    -->                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
