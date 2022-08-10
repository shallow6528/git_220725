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
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
 
    ?>
       <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
  
    <?php }  ?>
    <?
            $startdate = date("Y-m-d",time()); // 오늘 날짜 가져옴
            $enddate = $list[$i]['wr_2']; // 마감일 2023-06-30 <-- 형식으로
            $timediffer=strtotime($enddate) - strtotime($startdate);   // 마감일과 오늘의 날짜 차이를 구함
            $day = floor(($timediffer)/(60*60*24));
            ?>
            <h3 class="font-weight-bold">D<?php echo $day ?></h3>
            <h5 class="font-weight-bold">마감일 까지 <?php echo $day ?> 일 남았습니다.</h5>


    <? if($startdate = $enddate /* 오늘이 d-day 이라면 */) echo '오늘은 종료일///' ?>

<?/*
function d_day($m,$d,$y) {
$now = time();
$dday = mktime(0,0,0,$m,$d,$y);
$xday = ceil(($dday-$now)/(60*60*24));
if($xday >= 0) $result = '<b>D-'.$xday.'</b>';
else {
$result = '<b>D+'.abs($xday).'</b>';
}
return $result;
}
?>
<h3 class="font-weight-bold">D<?php echo $dday ?></h3>
<h5 class="font-weight-bold">마감일 까지 <?php echo $dday ?> 일 남았습니다.</h5>

<?=d_day(6,30,2023)*/?>

    