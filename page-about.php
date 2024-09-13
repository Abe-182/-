<?php get_header('second'); ?>


<main id="main" class="about-wrapper">
<?php
    if (have_posts()) :
        while (have_posts()) :
        the_post();
?>
<!-- 繰り返し処理する内容 -->
        <h2><span>
            <!-- 犬鷲探検隊とは -->
            <?php the_title(); ?>
        </span></h2>
        <div class="introduction">
        <?php the_post_thumbnail(null, array('class' => 'single_main_thumb')); ?>
            <!-- <img src="img/item2.jpg" alt="選手のユニフォーム"> -->
            <div class="introduction-text">
                <p>
                <?php the_content(); ?>    
                <!-- 我々、犬鷲探検隊は、本サイトにおいて東北楽天ゴールデンイーグルスの魅力を「球場メシ」「球場風景」「試合解説」の観点から、余すところなく紹介することを誓います。 -->
                    <!-- <br> -->
                    <!-- 日ごろなかなかホーム球場に来られないイーグルスファンの皆さまに「球場に行きたい！」と思っていただけるような情報をご提供できるよう、日々精進してまいります。 -->
                </p>
            </div>
        </div>
        <!-- ----------ここまで------------ -->
        <?php
            endwhile;
            endif;
                ?>
    </main>

<?php get_footer(); ?>