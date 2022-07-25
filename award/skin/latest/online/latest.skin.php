<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 500;
$thumb_height = 717;
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
      
            
            <?php echo $list[$i]['wr_content']?>

            <section id="online">
<div class="container">
<h2>온라인 접수</h2>
<div class="container_wr">
<input class="form-control" type="text" placeholder="응모자 성명" aria-label="default input example">
<input class="form-control" type="text" placeholder="연락처" aria-label="default input example">
<input class="form-control" type="text" placeholder="이메일" aria-label="default input example">
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected="">Open this select menu</option>
  <option value="저학년 동화책">One</option>
  <option value="고학년 단편">Two</option>
  <option value="고학년 장편">Three</option>
</select>

</div>
</div>
</section>
       
    <?php }  ?>

    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
 
