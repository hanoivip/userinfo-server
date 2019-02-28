<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{{ config('id.name.site') }} Passport - Tài khoản cổng game {{ config('id.name.portal') }}</title>
        <link rel="shortcut icon" href="https://stc-id.zing.vn/favicon.ico" />
        <script src="{{ asset('js/jquery-1.9.1.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('js/zmCore-1.46.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/swfobject.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/zmxcall.js') }}"></script>
        <!--<script type="text/javascript" src="https://stc-id.zing.vn/login/js/tracking_hotgame_hotevent.js"></script>-->
        <script type="text/javascript" src="{{ asset('js/tracking_hotgame_hotevent.js') }}"></script>

        <link href="{{ asset('css/zingid_02_18.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bootstrap/bootstrap-datetimepicker.css') }}" rel="stylesheet" media="screen">
        <script type="text/javascript" src="{{ asset('bootstrap/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
    </head>
    <body>

        <script type="text/javascript" src="{{ asset('js/zm.ui-2.15.min.js') }}"></script>            
        <!--<script type="text/javascript" src="{{ asset('js/zid_27.js') }}"></script>-->
        <link href="{{ asset('css/jcarousel.basic-1.01.css') }}" rel="stylesheet" type="text/css">
        
        <script type="text/javascript" src="{{ asset('js/jquery.jcarousel.min.js') }}"></script>

            <div class="zid_header">
                <div class="zid_header_inner">
                    <input id="serverdomain" type="hidden" value="https://id.zing.vn/v2"></input>
                    <input id="acn" type="hidden" value=""></input>
                    <h1 class="zidlogo"><a class="navbar-brand" href="{{ url('/') }}" style="text-indent: 0;text-decoration: none;line-height: 44px;color: #fff;">{{ config('id.name.site') }}</a></h1>
                    @if (Auth::guest())
                    @else
                    <div class="zidlogfrom">
                        Chào <strong>{{ Auth::user()->name }}</strong> <span class="logappname"> 
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();"> Thoát </a></span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @endif
                </div>
            </div>  
            @if (Auth::guest())
            @else   
            <div class="accuser_code">
                <div class="accuser_code_inner">
                    Tài khoản ({{ config('id.name.site') }}): <strong>{{ Auth::user()->name }}</strong>  |  Mã số tài khoản: <strong>{{ Auth::user()->id }}</strong>
                </div>
            </div>
                   
            @endif
            @yield('content')
            <div class="zidfooter">
                <div class="zidfooter_inner">
                    <div class="zidfooter_left">
                        Copyright © 2018 {{ config('id.name.portal') }}
                    </div>
                    <ul class="zidfooter_right">
                        <li><a  href="javascript:void(0);">Hỏi đáp</a></li>
                        <li class="dot"></li>
                        <li><a  href="javascript:void(0);">Hướng dẫn</a></li>
                        <li class="dot"></li>
                        <li><a  href="javascript:void(0);" title="Hỗ trợ">Hỗ trợ</a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
            </div>
    </body>

</html>