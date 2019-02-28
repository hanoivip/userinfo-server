@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
<div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Cập nhật email bảo mật</h2>
            <div class="inforow">
                    <form class="form-horizontal" method="POST" action="{{ route('secure-update-email-result') }}">
                            {{ csrf_field() }}
                            
                            @if (!empty($info->personal_id))
                            <div class="form-group{{ $errors->has('personid') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label phonerq_lb"><strong>CMTND</strong></label>

                            <div class="col-md-6">
                                <input id="personid" type="text" class="form-control finput phonenum_txt" style="width: 400px;" name="personid" value="{{ old('personid') }}">

                                @if ($errors->has('personid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('personid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        
                        @if (!empty($info->email) && !empty($info->email_verified) && $info->email_verified)
                        <div class="form-group{{ $errors->has('oldmail') ? ' has-error' : '' }}">
                            <label for="oldmail" class="col-md-4 control-label phonerq_lb"><strong>Email hiện tại</strong></label>

                            <div class="col-md-6">
                                <input id="oldmail" type="text" class="form-control finput phonenum_txt" style="width: 400px;" name="oldmail" required autofocus>

                                @if ($errors->has('oldmail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        
                        <div class="form-group{{ $errors->has('newmail') ? ' has-error' : '' }}">
                            <label for="newmail" class="col-md-4 control-label phonerq_lb"><strong>Email mới</strong></label>

                            <div class="col-md-6">
                                <input id="newmail" type="text" class="form-control finput phonenum_txt" style="width: 400px;" name="newmail" required>

                                @if ($errors->has('newmail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newmail') }}</strong>
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
