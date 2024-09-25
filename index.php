<?php get_header(); ?>


<main id="main">
    <!-- mainvisual -->
    <section id="mainvisual">
        <div class="mainvisual">
            <h1><span>犬鷲探検隊！行くぞ仙台！</span></h1>
            <p><span>～疫病神伝説～</span></p>
        </div>
        <ul class="pic">
            <li>
                <!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/img/mainvisual2.jpg'); ?>" alt="球場正面"> -->
            </li>
            <li>
                <!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/img/item7.jpg'); ?>" alt="ナイター"> -->
            </li>
            <li>
                <!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/img/item12.jpg'); ?>" alt="ロゴ"> -->
            </li>
        </ul>
    </section>
    <!-- 新着 -->
    <section id="new" class="wrapper">
        <h2>新&ensp;着</h2>
        <!-- スライダー -->
        <ul class="slide-items">
            <!-- --------------------カット↓ -->
            <!-- <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/item7.jpg'); ?>" alt=""></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/item5.jpg'); ?>" alt=""></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/item2.jpg'); ?>" alt=""></a></li> -->
            <!-- -----------------------カット↑ -->

            <?php
            // 新着記事を取得するクエリ
            $args = array(
                'post_type' => 'post',           // 投稿タイプ
                'posts_per_page' => 3,           // 表示する投稿数
                'orderby' => 'date',             // 日付で並び替え
                'order' => 'DESC'                // 新しい順に並び替え
            );
            $new_posts = new WP_Query($args);

            if ($new_posts->have_posts()) :
                while ($new_posts->have_posts()) : $new_posts->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/default.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <li>新しい投稿がありません</li>
            <?php endif; ?>
        </ul>
    </section>
    <!-- contents -->
    <section id="contents" class="wrapper">
        <!-- <div class="contents-item"> -->
        <a href="<?php echo esc_url(home_url('/rice')); ?>" class="test" id="rice">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/item5.jpg'); ?>" alt="ロコモコ丼">
            <div class="test2">
                <!-- <a href="rice.html"> -->
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/Street Food.png'); ?>" alt="ご飯のアイコン">
                <h3>メ&ensp;シ</h3>
                <!-- </a> -->
            </div>
        </a>
        <!-- </div> -->
        <a href="<?php echo esc_url(home_url('/view')); ?>" class="test" id="view">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/mainvisual.jpg'); ?>" alt="フィールドの景色">
            <div class="test2">
                <!-- <a href="rice.html"> -->
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/Eagle.png'); ?>" alt="鷲のアイコン">
                <h3>風&ensp;景</h3>
                <!-- </a> -->
            </div>
        </a>
        <a href="<?php echo esc_url(home_url('/game')); ?>" class="test" id="game">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/item11.jpg'); ?>" alt="スタメンボード">
            <div class="test2">
                <!-- <a href="rice.html"> -->
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/Baseball Ball.png'); ?>" alt="ボールのアイコン">
                <h3>試&ensp;合</h3>
                <!-- </a> -->
            </div>
        </a>


        <!-- <div class="contents-item" id="rice">
                <a href="rice.html"><img src="img/item5.jpg" alt="ロコモコ丼"></a>
                <div class="part">
                    <a href="rice.html">
                        <img src="img/Street Food.png" alt="ご飯のアイコン">
                        <h3>メ&ensp;シ</h3>
                    </a>
                </div>
            </div> -->
        <!-- <div class="contents-item" id="view">
                <a href="view.html"><img src="img/mainvisual.jpg" alt="フィールドの景色"></a>
                <div class="part">
                    <a href="view.html">
                        <img src="img/Eagle.png" alt="鷲のアイコン">
                        <h3>風&ensp;景</h3>
                    </a>
                </div>
            </div> -->
        <!-- <div class="contents-item" id="game">
                <a href="game.html"><img src="img/item11.jpg" alt="スタメンボード"></a>
                <div class="part">
                    <a href="game.html">
                        <img src="img/Baseball Ball.png" alt="ボールのアイコン">
                        <h3>試&ensp;合</h3>
                    </a>
                </div>
            </div> -->
    </section>
    <!-- map -->
    <section id="map" class="wrapper">
        <div class="access">
            <h4>アクセス</h4>
            <dl>
                <dt>JR「仙台駅」下車</dt>
                <dt>徒歩</dt>
                <dd>約20分</dd>
                <dt>シャトルバス</dt>
                <dd>約8分</dd>
                <dt class="map-part">JR仙石線「宮城野原駅」下車</dt>
                <dt>徒歩</dt>
                <dd>約5分</dd>
            </dl>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12531.516841398128!2d140.8948429!3d38.2591074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8987f8bccaca49%3A0x8f6bde2e8786ca3!2z5qW95aSp44Oi44OQ44Kk44Or44OR44O844Kv5a6u5Z-O!5e0!3m2!1sja!2sjp!4v1723985357717!5m2!1sja!2sjp"
            width="773" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<?php get_footer(); ?>