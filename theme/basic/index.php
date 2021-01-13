<?php
include_once('./_common.php');

if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');



?>

<!-- section1 -->
<section id="main_banner">
    <div id="main_video">

    </div>
    <img src="<?php echo G5_IMG_URL ?>/main_banner.png" alt="">
    <div class="main_txt">
        <h2>OHA BIOTECH</h2>
        <h3>오하이이오텍은<br>숨쉬기편하고 안전한 마스크만을<br>생산합니다.</h3>

        <!-- <button class="main_btn">자세히보기 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></button> -->
    </div>
</section>
<!-- section2 -->
<section id="section2" class="clearfix">
    <span class="ver_line"></span>
    <h2 class="title"><a href="<?php echo get_pretty_url('content', 'company');  ?>">OHA BIOTECH STORY</a></h2>
    <h3 class="sub_title">오하바이오텍을 소개합니다.</h3>
    <a href="<?php echo get_pretty_url('content', 'company');  ?>" class="more_btn">VIEW MORE +</a>
    <ul class="pic_li_cont">
        <li><a href="<?php echo get_pretty_url('content', 'company'); ?>"><img
                    src="<?php echo G5_IMG_URL ?>/company_thum.jpg" alt="">
                <h4>오하바이오텍이란?</h4>
                <p>오하바이오텍은...</p>
            </a>
            <div class="img_hover">MORE VEIW + </div>
        </li>
        <li><a href="<?php echo get_pretty_url('content', 'technology'); ?>"><img
                    src="<?php echo G5_IMG_URL ?>/tech_thum.jpg" alt="">
                <h4>기술소개</h4>
                <p>오하바이오텍은 기술</p>
            </a>
            <div class="img_hover" style="display:none;">MORE VEIW + </div>
        </li>
        <li><a href=""><img src="<?php echo G5_IMG_URL ?>/news_thum.jpg" alt="">
                <h4>언론보도</h4>
                <p>오하바이오텍 언론보도</p>
            </a>
            <div class="img_hover" style="display:none;">MORE VEIW + </div>
        </li>
    </ul>
</section>
<!-- section3 -->
<section id="section3" class="clearfix">
    <h2 class="title"><a href="<?php echo get_pretty_url($bo_table); ?>">NEW AVRRIVAL</a></h2>
    <h3 class="sub_title">오하바이오텍에서 새롭게 출시된 신상품을 소개합니다.
    </h3>
    <!-- swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href=""><img src="<?php echo G5_IMG_URL ?>/3d_w.jpg" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="<?php echo G5_IMG_URL ?>/3d_b.jpg" alt=""></a></div>

            <div class="swiper-slide"><a href=""><img src="<?php echo G5_IMG_URL ?>/2d_w.jpg" alt=""></a></div>

            <div class="swiper-slide"><a href=""><img src="<?php echo G5_IMG_URL ?>/2d_b.jpg" alt=""></a></div>

            <div class="swiper-slide"><a href=""><img src="<?php echo G5_IMG_URL ?>/den_w.jpg" alt=""></a></div>

            <div class="swiper-slide"><a href=""><img src="<?php echo G5_IMG_URL ?>/den_b.jpg" alt=""></a></div>

            <div class="swiper-slide"><a href=""><img src="<?php echo G5_IMG_URL ?>/2dc_w.jpg" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="<?php echo G5_IMG_URL ?>/2dc_b.jpg" alt=""></a></div>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- section4 -->
<section id="section4" class="clearfix">
    <img src="<?php echo G5_IMG_URL ?>/section4_banner.jpg" alt="">
</section>
<!-- section5 -->
<section id="section5" class="clearfix">
    <h2 class="title"><a href="<?php echo get_pretty_url('content', 'company');  ?>">CONTACT US</a></h2>
    <h3 class="sub_title">궁금한 사항이나 기타 문의사항이 있으신 경우 언제든 연락 부탁드립니다.</h3>
    <div class="contact_us">
        <div class="cont_lf">
            <h2>CONTACT US</h2>
        </div>


    </div>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>