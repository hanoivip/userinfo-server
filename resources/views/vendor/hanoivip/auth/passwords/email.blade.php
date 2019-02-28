@extends('hanoivip::layouts.app')

@section('content')
<div class="zidbody">     
    <div class="zidforgot clearfix">
        <h2 class="formheader">Quên thông tin tài khoản</h2> 
                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Tên đăng nhập (hoặc Email đăng nhập, hoặc SĐT đăng nhập)</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="finput finput phonenum_txt" style="width: 450px;"  name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="phonerq_btn" style=" margin-top: 20px;">
                                    Gửi mật khẩu vào email
                                </button>
                                <input type="button" style="margin: 20px;width: 85px;" class="phonerq_btn" onclick="window.location = '{{ route("home") }}'" value="Hủy bỏ">
                            </div>
                        </div>
                    </form>
            </div>
        </div>
@endsection

    