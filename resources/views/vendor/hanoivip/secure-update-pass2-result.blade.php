@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
<div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Cập nhật mật khẩu bảo mật</h2>
            <div class="zid_phonenum_security">
                <div id="active_phone_success" style="padding-top: 10px;">
                    <div class="">
                        <div class="resetpass_success">
                            <span class="smile_icn zidsprt"></span>
                            <p style="padding-left: 75px;">
                                @if (!empty($message))
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    <script>
                                    window.setTimeout(function() {
                                        window.location = '{{ route("home") }}';
                                      }, 2000);
                                    </script>
                                
                        </p>
                        <p style="padding-left: 83px;"><a href="javascript:void(0);" tabindex="1"><strong>Trở về trang chủ sau 2s.</strong></a></p>
                        @endif
                        @if (!empty($error_message))
                            <p style="padding-left: 75px;">
                                <span class="help-block">
                                    <strong>{{ $error_message }}</strong>
                                </span>
                            </p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
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
@endsection
