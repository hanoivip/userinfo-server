@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
<div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Cập nhật mật khẩu</h2>
            <div class="inforow">

                        <form class="form-horizontal" method="POST" action="{{ route('pass-update-result') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group{{ $errors->has('oldpass') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label phonerq_lb"><strong>Mật khẩu cũ</strong></label>

                            <div class="col-md-6">
                                <input id="oldpass" type="password" class="form-control finput phonenum_txt" style="width: 400px;" name="oldpass" value="{{ old('oldpass') }}" required autofocus>

                                @if ($errors->has('oldpass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldpass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('newpass') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label phonerq_lb"><strong>Mật khẩu</strong></label>

                            <div class="col-md-6">
                                <input id="newpass" type="password" class="form-control finput phonenum_txt" style="width: 400px;" name="newpass" required>

                                @if ($errors->has('newpass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newpass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('newpass_confirmation') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label phonerq_lb"><strong>Nhập lại</strong></label>

                            <div class="col-md-6">
                                <input id="newpass_confirmation" type="password" class="form-control finput phonenum_txt" style="width: 400px;" name="newpass_confirmation" required>

                                @if ($errors->has('newpass_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newpass_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                                <label for="captcha" class="col-md-4 control-label phonerq_lb"><strong>Mã kiểm tra</strong></label>
                                <img src="{{ captcha_src() }}" alt="captcha"/>
                                <div class="col-md-6">
                                <input id="captcha" type="text" class="form-control finput phonenum_txt" style="width: 400px;" name="captcha" required>
                                
                                @if ($errors->has('captcha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="phonerq_btn">
                                    Cập nhật
                                </button>
                                <input type="button" style="margin-left: 20px;width: 85px;" class="phonerq_btn" onclick="window.location = '{{ route("home") }}'" value="Hủy bỏ">
                            </div>
                        </div>
                        
                    </form>
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
