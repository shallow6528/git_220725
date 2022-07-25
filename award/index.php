<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head_main.php');
?>

<h2 class="sound_only">최신글</h2>

<section id="main" class="d-flex justify-content-center">
    <div id="main_p" class="d-flex justify-content-around flex-column vw100 w-100">
        <div class="main_t">
            <a href="<?php echo G5_URL ?>">
            <?php echo latest('main_logo','as',1,0); ?>
            </a>
        </div>
        <div class="main_s">
            <h2 class="text-right pr-5 font-weight-bold">총 상금 5,000만원</h2>
            <div class="slide">
                <?php echo latest('slide','red',4,1000);?>
            </div>
        </div>
    </div> 
    <div class="main_bg position-absolute row">
        <div class="main_bg_01">
            <img src="https://shallow6528.cafe24.com/award/data/editor/2207/thumb-2ecda41053eb69031df57b0e160e4d1a_1658471565_5308_835x938.png" alt="배경1">
        </div>
        <div class="main_bg_02 d-none d-lg-block">
            <img src="https://shallow6528.cafe24.com/award/data/editor/2207/thumb-2ecda41053eb69031df57b0e160e4d1a_1658471622_332_835x939.png" alt="배경2">
        </div>
    </div>
</section>    
    
<?php echo latest('about','about',1,100);?>


<section id="ch">
    <div class="container text-center py-5">
        <h2>어린이 독서단</h2>
        <p>새로운 상상을 먼저 경험하세요!</p>
           <div id="slidebook">
            <div class="swiper">  
                <div class="swiper-button-next">
                       <span class="sound_only">이전</span>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=1">
                            <strong>                       
                                    <span class="d-block">이름 : 김○진</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award.jpg" alt="어린이 공모전 작품 1">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=2">
                            <strong>                       
                                    <span class="d-block">이름 : 김○지</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 고학년 단편</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-2.jpg" alt="어린이 공모전 작품 2">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=3">
                            <strong>                       
                                    <span class="d-block">이름 : 곽○이</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 고학년 장편</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-3.jpg" alt="어린이 공모전 작품 3">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=4">
                            <strong>                       
                                    <span class="d-block">이름 : 조○연</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award.jpg" alt="어린이 공모전 작품 4">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=5">
                            <strong>                       
                                    <span class="d-block">이름 : 김○니</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-2.jpg" alt="어린이 공모전 작품 5">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=6">
                            <strong>                       
                                    <span class="d-block">이름 : 전○연</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-3.jpg" alt="어린이 공모전 작품 6">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=7">
                            <strong>                       
                                    <span class="d-block">이름 : 송○기</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award.jpg" alt="어린이 공모전 작품 7">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=8">
                            <strong>                       
                                    <span class="d-block">이름 : 예○화</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 고학년 단편</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-2.jpg" alt="어린이 공모전 작품 8">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=9">
                            <strong>                       
                                    <span class="d-block">이름 : 엽○화</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 고학년 장편</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-3.jpg" alt="어린이 공모전 작품 9">
                        </a>
                    </div>                              
                </div>  
                <div class="swiper-button-prev">
                        <span class="sound_only">다음</span>
                    </div>                
            </div>
        </div>
             <p>
                <span class="d-block mb-3">QR코드 통해 친구들보다 먼저 읽고 감상을 남겨주세요.</span>
                <span class="d-block mb-3">우수한 감상평이 가장 많은 작품이 눈높이 상으로 선정됩니다</span>
             </p>
            <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list" class='btn p-2'>다른 작품도 읽어보기</a>
    </div>
</section>
<?php echo latest('event','event',1,100);?>
<?php echo latest('info','info',1,0);?>
<?php echo latest('online','online',1,0);?>
<?php
include_once(G5_PATH.'/tail.php');