<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



    <?php
    for ($i=0; $i<$list_count; $i++) {
        
        $img_link_html = '';
        
        $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);

        if( $i === 0 ) {
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['src'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
            $img_link_html = '<a href="'.$wr_href.'" class="lt_img" >'.run_replace('thumb_image_tag', $img_content, $thumb).'</a>';
        }
    ?>
       <?
            $startdate = date("Y-m-d", time()); // 오늘 날짜 가져옴
            $enddate = $list[$i]['wr_1']; // 마감일 2023-06-30 <-- 형식으로
            $timediffer=strtotime($enddate) - strtotime($startdate);   // 마감일과 오늘의 날짜 차이를 구함
            $day = floor(($timediffer)/(60*60*24));
            ?>
            <h3>D<?php echo $day ?></h3>
            <h5>마감일 까지 <?php echo $day ?> 일 남았습니다.</h5>


    <? if($startdate = $enddate /* 오늘이 d-day 이라면 */) echo '오늘은 종료일///' ?>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
   

</div>