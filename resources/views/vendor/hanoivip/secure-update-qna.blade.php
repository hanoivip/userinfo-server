@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
<div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Cập nhật câu hỏi bảo mật</h2>
            <div class="inforow">
                    <form class="form-horizontal" method="POST" action="{{ route('secure-update-qna-result') }}">
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
                        
                        @if (!empty($info->question) && !empty($info->answer))
                        <div class="form-group{{ $errors->has('oldquestion') ? ' has-error' : '' }}">
                            <label for="oldquestion" class="col-md-4 control-label phonerq_lb" style="width: 190px"><strong>Câu hỏi hiện tại</strong></label>

                            <div class="col-md-6">
                                <select name="oldquestion" id="oldquestion" class="form-control finput phonenum_txt" style="width: 424px;">
                                        <option value="-1">Chọn câu hỏi</option>
                                        @if (isset($questions))
                                            @for ($i=0; $i<count($questions); ++$i)
                                                <option value="{{$questions[$i][0]}}">{{$questions[$i][1]}}</option>
                                            @endfor
                                        @endif
                                    </select>

                                @if ($errors->has('oldquestion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldquestion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('oldanswer') ? ' has-error' : '' }}">
                            <label for="oldanswer" class="col-md-4 control-label phonerq_lb"><strong>Trả lời hiện tại</strong></label>

                            <div class="col-md-6">
                                <input id="oldanswer" type="text" class="form-control finput phonenum_txt" style="width: 400px;" name="oldanswer" required autofocus>

                                @if ($errors->has('oldanswer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldanswer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        
                        <div class="form-group{{ $errors->has('newquestion') ? ' has-error' : '' }}">
                            <label for="newquestion" class="col-md-4 control-label phonerq_lb"><strong>Câu hỏi mới</strong></label>

                            <div class="col-md-6">
                                <select name="newquestion" id="newquestion" class="form-control finput phonenum_txt" style="width: 424px;">
                                        <option value="-1">Chọn câu hỏi</option>
                                        @if (isset($questions))
                                            @for ($i=0; $i<count($questions); ++$i)
                                                <option value="{{$questions[$i][0]}}">{{$questions[$i][1]}}</option>
                                            @endfor
                                        @endif
                                    </select>

                                @if ($errors->has('newquestion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newquestion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('newanswer') ? ' has-error' : '' }}">
                            <label for="newanswer" class="col-md-4 control-label phonerq_lb"><strong>Trả lời mới</strong></label>

                            <div class="col-md-6">
                                <input id="newanswer" type="text" class="form-control finput phonenum_txt" style="width: 400px;" name="newanswer" required autofocus>

                                @if ($errors->has('newanswer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newanswer') }}</strong>
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
