<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con" class="facti_bn">
        <?/*php echo $str;*/ ?>
        <img src="<?php echo G5_IMG_URL ?>/facti_bn.jpg" alt="main_banner">

        <div class="facti_cont">
            <h2>
                <img src="<?php echo G5_IMG_URL ?>/subpage_logo.png" alt="sublogo">
            </h2>

            <div data-aos="fade-up" data-aos-duration="700" class="cont1">
                <img src="<?php echo G5_IMG_URL ?>/company_thum.jpg" alt="">
                <h3>
                    오하바이오텍 공장 외부
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont2">
                <h3>
                    오하바이오텍 공장 내부
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont3">
                <h3>
                    오하바이오텍 공장 내부
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont4">
                <h3>
                    오하바이오텍 공장 내부
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont5">
                <h3>
                    오하바이오텍 공장 내부
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont6">
                <h3>
                    오하바이오텍 백약99상쾌한마스크 제작 과정
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont7">
                <h3>
                    오하바이오텍 백약99상쾌한마스크 제작 과정
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont8">
                <h3>
                    오하바이오텍 백약99상쾌한마스크 제작 과정
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont9">
                <h3>
                    오하바이오텍 백약99상쾌한마스크 제작 과정
                </h3>
            </div>
            <div data-aos="fade-up" data-aos-duration="700" class="cont10">
                <h3>
                    오하바이오텍 백약99상쾌한마스크 제작 과정
                </h3>
            </div>


        </div>
    </div>


    <span class="ver_line"></span>

</article>

<script>
    AOS.init();
</script>