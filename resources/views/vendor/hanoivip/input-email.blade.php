@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
<div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Cập nhật email</h2>
            <div class="inforow">
                <form class="form-horizontal" method="POST" action="{{ route('email-update-result') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label phonerq_lb"><strong>Nhập email</strong></label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="finput finput phonenum_txt" style="width: 450px;" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="phonerq_btn">
                                    Gửi email xác nhận
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
