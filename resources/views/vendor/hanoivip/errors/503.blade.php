<html lang="vi"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="//img.zing.vn/products/vltkw/favicon.ico">
<title>503 Page Not Found - {{ config('id.name.portal') }}</title>
<style type="text/css">
.Wrapper {
    display: block;
    margin: 0 auto;
}
.Text {
    height: 70px;
    position: absolute;
    top: 250px;
    left: 50%;
    margin-left: -235px;
}
.Main {
    width: 1000px;
    display: block;
    height: 600px;
    margin: 0 auto;
}
.LinkHome, .LinkFanpage {
    display: inline-block;
    background: url('{{ asset('img/sprite.png') }}') no-repeat;
    overflow: hidden;
    text-indent: -9999px;
    text-align: left;
    width: 210px;
    height: 70px;
}
</style>
</head>
<body style="background: #000 url('{{ asset('img/503.jpg') }}') center 0px no-repeat;">
    <div class="Wrapper">
        <div class="Main">
            <div class="Text">
                 <a href="{{ url('/') }}" title="Trang chủ" class="LinkHome">Trang chủ</a>
                 <a href="javascript:void(0);"  class="LinkFanpage" title="Fanpage" style="background-position: -210px 0px;">Fanpage</a>
            </div>
        </div>
    </div>  


</body>
</html>