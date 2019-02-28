@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
<div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Cập nhật thông tin cá nhân</h2>
            <div class="inforow">
                    <form class="form-horizontal" method="POST" action="{{ route('personal-update-result') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                            <label for="hoten" class="col-md-4 control-label phonerq_lb"><strong>Họ tên</strong></label>

                            <div class="col-md-6">
                                <input id="hoten" type="text" class="form-control finput" style="width: 400px;" name="hoten" value="{{ !empty(old('hoten')) ? old('hoten') : $personal->hoten }}" required autofocus>

                                @if ($errors->has('hoten'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hoten') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label"><strong>Giới tính</strong></label>

                            <div class="col-md-6">
                                <select name="sex" id="sex" class="form-control finput" style="width: 424px;">
                                        <option value="-1">Chọn giới tính</option>
                                        @if (isset($sexs))
                                            @for ($i=0; $i<count($sexs); ++$i)
                                                <option value="{{$sexs[$i][0]}}">{{$sexs[$i][1]}}</option>
                                            @endfor
                                        @endif
                                    </select>

                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label phonerq_lb"><strong>Ngày sinh</strong></label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control finput" style="width: 400px;" name="birthday" required autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label phonerq_lb"><strong>Địa chỉ</strong></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control finput" style="width: 400px;" name="address" value="{{ !empty(old('address')) ? old('address') : $personal->address }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                            
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label phonerq_lb"><strong>Thành phố</strong></label>

                            <div class="col-md-6">
                                <select name="city" id="city" class="form-control finput" style="width: 424px;">
                                        <option value="-1">Chọn thành phố</option>
                                        @if (isset($cities))
                                            @for ($i=0; $i<count($cities); ++$i)
                                                <option value="{{$cities[$i][0]}}">{{$cities[$i][1]}}</option>
                                            @endfor
                                        @endif
                                    </select>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('career') ? ' has-error' : '' }}">
                            <label for="career" class="col-md-4 control-label"><strong>Thành phố</strong></label>

                            <div class="col-md-6">
                                <select name="career" id="career" class="form-control finput" style="width: 424px;">
                                        <option value="-1">Chọn nghề nghiệp</option>
                                        @if (isset($careers))
                                            @for ($i=0; $i<count($careers); ++$i)
                                                <option value="{{$careers[$i][0]}}">{{$careers[$i][1]}}</option>
                                            @endfor
                                        @endif
                                    </select>

                                @if ($errors->has('career'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('career') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('marriage') ? ' has-error' : '' }}">
                            <label for="marriage" class="col-md-4 control-label"><strong>Tình trạng hôn nhân</strong></label>

                            <div class="col-md-6">
                                <select name="marriage" id="marriage" class="form-control finput" style="width: 424px;">
                                        <option value="-1">Chọn</option>
                                        @if (isset($marriages))
                                            @for ($i=0; $i<count($marriages); ++$i)
                                                <option value="{{$marriages[$i][0]}}">{{$marriages[$i][1]}}</option>
                                            @endfor
                                        @endif
                                    </select>

                                @if ($errors->has('marriage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('marriage') }}</strong>
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
