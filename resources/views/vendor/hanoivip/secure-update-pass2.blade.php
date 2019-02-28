@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
<div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Cập nhật mật khẩu bảo mật</h2>
            <div class="inforow">
                    <form class="form-horizontal" method="POST" action="{{ route('secure-update-pass2-result') }}">
                            {{ csrf_field() }}
                            
                            @if (!empty($info->personal_id))
                            <div class="form-group{{ $errors->has('personid') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label phonerq_lb"><strong>CMTND</strong></label>

                            <div class="col-md-6">
                                <input id="personid" type="text" class="form-control finput phonenum_txt" style="width: 400px;" name="personid" value="{{ old('personid') }}" required autofocus>

                                @if ($errors->has('personid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('personid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        
                        @if (!empty($info->pass2))
                        <div class="form-group{{ $errors->has('oldpass2') ? ' has-error' : '' }}">
                            <label for="oldpass2" class="col-md-4 control-label phonerq_lb" style="width: 190px;"><strong>Mã game hiện tại</strong></label>

                            <div class="col-md-6">
                                <input id="oldpass2" type="password" class="form-control finput phonenum_txt" style="width: 400px;" name="oldpass2" required autofocus>

                                @if ($errors->has('oldpass2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldpass2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        
                        <div class="form-group{{ $errors->has('newpass2') ? ' has-error' : '' }}">
                            <label for="newpass2" class="col-md-4 control-label phonerq_lb"><strong>Mã game mới</strong></label>

                            <div class="col-md-6">
                                <input id="newpass2" type="password" class="form-control finput phonenum_txt" style="width: 400px;" name="newpass2" required autofocus>

                                @if ($errors->has('newpass2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newpass2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('newpass2_confirmation') ? ' has-error' : '' }}">
                            <label for="newpass2_confirmation" class="col-md-4 control-label phonerq_lb" style="width: 190px;"><strong>Nhắc lại mã game mới</strong></label>

                            <div class="col-md-6">
                                <input id="newpass2_confirmation" type="password" class="form-control finput phonenum_txt" style="width: 400px;" name="newpass2_confirmation" required>

                                @if ($errors->has('newpass2_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newpass2_confirmation') }}</strong>
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
