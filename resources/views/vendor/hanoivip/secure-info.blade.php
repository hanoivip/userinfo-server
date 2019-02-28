@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
        <div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Bảo Mật Tài Khoản</h2>
            @if (empty($info))
                    <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        Something went wrong. Please contact Customer Service now.
                        </div></div>
            @else
            <div class="inforow">
                @if (empty($info->email_verified) ||
                    empty($info->phone_verified))
                    Bạn vui lòng cập nhật email bảo vệ, mật khẩu cấp 2, câu hỏi bảo vệ để lấy lại mật khẩu trong trường hợp bị quên.
                @endif
            </div>
            <div id="email_general" style="position: relative">
                <div id="email" class="inforow" rel="display">
                    <label>Email bảo vệ: </label>
                    
                    <p class="lk_update"> 
                        @if (empty($info->email))

                        @else
                                @if (empty($info->email_verified))
                                    <a href="{{route('secure-resend-email')}}">Xác thực</a>
                                @endif
                        @endif
                        <a href="{{route('secure-update-email')}}">Cập nhật</a>
                    </p> 

                    <span style="font-size:12px">
                        <i>
                            @if (empty($info->email))
                                (Chưa có thông tin)
                            @else
                                    {{ hideEmail($info->email) }}
                                    @if (empty($info->email_verified))
                                        (Chưa xác nhận)
                                    @else
                                        (Đã xác nhận)
                                    @endif
                            @endif
                        </i>
                    </span>
                </div>
            </div>
            <div class="inforow">
                <label>Mật Khẩu bảo vệ:</label>           
                <p class="lk_update"> <a href="{{route('secure-update-pass2')}}">Cập nhật</a></p>
                <span style="font-size:12px">
                        <i>
                            @if (empty($info->pass2))
                                (Chưa có thông tin)
                            @else
                                    {{ hidePassword($info->pass2) }}
                            @endif                        
                        </i>
                    </span>
            </div>
            <div class="inforow">
                <label>Câu hỏi bảo vệ:</label>           
                <p class="lk_update"><a href="{{route('secure-update-qna')}}">Cập nhật</a></p>
                <span style="font-size:12px">
                        <i>
                             
                        @if (empty($info->question) ||
                                empty($info->answer))
                                (Chưa có thông tin)
                        @else
                                {{ hidePassword($info->answer) }}
                        @endif
                        
                        
                        </i>
                    </span>
            </div>
            @endif
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
        $('#menu_left3 a').addClass("selected");
    });
</script>
@endsection
