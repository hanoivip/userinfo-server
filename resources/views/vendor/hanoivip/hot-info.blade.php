@extends('hanoivip::layouts.app') @section('content')
@include('hanoivip::layouts.slidermenu')
<div class="zid_infocontent">
	<h2 class="content_title">
		<span class="titlebullet zidsprt"></span>Có gì mới
	</h2>
	Đang bảo trì
</div>
<script type="text/javascript">
    $=jQuery;
    jQuery(document).ready(function ($) {
        $('#menu_left5 a').addClass("selected");
    });
</script>
@endsection
