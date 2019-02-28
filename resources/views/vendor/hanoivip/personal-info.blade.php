@extends('hanoivip::layouts.app')

@section('content')
@include('hanoivip::layouts.slidermenu')
        <div class="zid_infocontent">
            <h2 class="content_title"><span class="titlebullet zidsprt"></span>Thông tin chung</h2>
            <div id="personal">  
                <div class="inforow">
                    <label>Họ tên:</label>
            
                    <p class="lk_update">
                        <a href="{{ route('personal-update') }}" alt='cap nhat'>Cập nhật</a>
                    </p>
                    <div class="infotext" style="overflow:hidden; word-wrap: break-word;">
                        @if (!empty($personal->hoten))
                                {{ $personal->hoten }}
                        @else
                                (Chưa thiết lập)
                        @endif
                    </div>
                </div>
                <div class="inforow" id="gender">
                    <label>Giới tính:</label>        
                    <div class="infotext">
                        @if (!empty($personal->sex))
                            {{ __('credential.personal.sex' . $personal->sex)}}
                        @else
                                (Chưa thiết lập)
                        @endif
                    </div>
                </div> 
                <div class="inforow">
                    <label>Ngày sinh:</label>
                    <div class="infotext">
                        @if (!empty($personal->birthday))
                            {{ $personal->birthday }}
                        @else
                                (Chưa thiết lập)
                        @endif
                    </div>
                </div>
                <div class="inforow">
                    <label>Địa chỉ:</label>
                    <div style="overflow:hidden; word-wrap: break-word;" class="infotext">
                        @if (!empty($personal->address))
                            {{ $personal->address }}
                        @else
                                (Chưa thiết lập)
                        @endif
                    </div>
                </div>
                <div class="inforow">
                    <label> Tỉnh/Thành phố:</label>
                    <div class="infotext">
                        @if (!empty($personal->city))
                            {{ __('credential.personal.city'. $personal->city) }}
                        @else
                                (Chưa thiết lập)
                        @endif
                    </div>
                </div>
                <div class="inforow">
                    <label>Nghề nghiệp:</label>
                    <div class="infotext">
                        @if (!empty($personal->career))
                            {{ __('credential.personal.career'. $personal->career) }}
                        @else
                                (Chưa thiết lập)
                        @endif
                    </div>
                </div>
                <div class="inforow">
                    <label>Tình trạng hôn nhân:</label>
                    <div class="infotext">
                        @if (!empty($personal->mariage))
                            {{ __('credential.personal.marriage'. $personal->mariage) }}
                        @else
                                (Chưa thiết lập)
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
        <div class="clr"></div>
    </div>              
</div>
<script type="text/javascript">
    $=jQuery;
    jQuery(document).ready(function ($) {
        $('#menu_left2 a').addClass("selected");
    });
</script>
@endsection
