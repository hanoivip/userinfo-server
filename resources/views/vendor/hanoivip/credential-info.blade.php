@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
        <div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Thông tin đăng nhập</h2>
            <div class="inforow">
                <label>Tên đăng nhập:</label>           
                <div class="infotext"><strong>{{ $credential->name }}</strong></div>
            </div>
            <div id="email_general" style="position: relative">
                <div id="email" class="inforow" rel="display">
                    <label>Email đăng nhập: </label>
                    
                    <p class="lk_update"> 
                        @if (empty($credential->email_verified))
                            @if (!empty($credential->email))
                                <a href="{{ route('resend-email') }}">Gửi lại</a>
                            @endif
                            @if ($errors->has('toofast'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('toofast') }}</strong>
                                </span>
                            @endif
                            <a href="{{ route('email-update') }}">Cập nhật</a>

                        @endif
                    </p> 

                    <span style="font-size:12px">
                        <i>
                            @if (!empty($credential->email))
                                        {{ hideEmail($credential->email) }}
                                        @if (empty($credential->email_verified))
                                            (Chưa xác thực)
                                        @else
                                            (Đã xác thực)
                                        @endif
                                    @else
                                        (Chưa có thông tin)
                                @endif
                        </i>
                    </span>
                </div>
            </div>
            <div class="inforow">
                <label>Mật Khẩu:</label>           
                <p class="lk_update"> <a href="{{ route('pass-update') }}">Thay đổi</a></p>
                <span style="font-size:12px">
                        <i>
                            {{ hidePassword($credential->password) }}
                        </i>
                    </span>
            </div>
           
            <div style="padding-top: 30px;display: none;">
                <p>
                    <a href="javascript:void(0);">
                        <img src="https://stc-id.zing.vn/login/images/banner/cs/vip_500x140.jpg" alt="CSPromotion">
                    </a>
                </p>
            </div>
        </div>
        <div class="clr"></div>
    </div>              
</div>
<script type="text/javascript">
    $=jQuery;
    jQuery(document).ready(function ($) {
        $('#menu_left1 a').addClass("selected");
    });
</script>
@endsection
