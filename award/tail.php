<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
        <div id="ft_link" class="ft_cnt row pb-3 m-auto">
            <!-- <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a> -->
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>" class="pr-5">개인정보처리방침</a>
            <!-- <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a> -->
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div>
        <div id="ft_company" class="ft_cnt row m-auto">
            <div id="logo" class="pt-3 pb-5">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
            </div>
	        <p class="ft_info">
                (재)금성    문화재단  이사장 : 김무상<br>
				사업자등록번호 : 105-82-08884<br>
				주소 : 서울특별시 마포구 만리재옛길23<br>
                TEL : 02-2077-8912<br>
			</p>
	    </div>
    </div>
    
   
    <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>

    
    

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
        
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");