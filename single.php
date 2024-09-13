<?php get_header('second'); ?>
<!-- ナビゲーション -->
<nav id="nav">
    <ul class="nav-menu">
        <li><a href="<?php echo esc_url(home_url('/rice')); ?>">メシ</a></li>
        <li><a href="view.html">風景</a></li>
        <li><a href="view.html">試合</a></li>
        <li><a href="about.html">「犬鷲探検隊」とは</a></li>
    </ul>
</nav>
<!-- 透過背景 -->
<div class="mask"></div>
<!-- ハンバーガーメニューボタン -->
<div class="toggle_btn">
    <span></span>
    <span></span>
    <span></span>
</div>
</header>

<main class="article-wrapper">
    <article>
        <!-- メインループ -->
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

                <div class="title">
                    <div class="date">
                        <p><?php the_time('Y-m-d'); ?></p>
                        <!-- カテゴリー名の取得 -->
                        <p>
                            <?php $categories = get_the_category();
                            $categories = $categories[0];
                            ?>
                            <?php echo $categories->name; ?>
                        </p>
                    </div>
                    <h2>
                        <?php the_title(); ?>
                        <!-- 記事タイトル -->
                    </h2>
                </div>
                <?php the_post_thumbnail(null, array('class' => 'eyecatch')); ?>
                <!-- <img class="eyecatch" src="img/item4.jpg" alt="バックスクリーン"> -->
                <p class="text">
                    <?php the_content(); ?>
                    <!-- 球場メシは本当に種類が豊富。選手が考案したオリジナルメニューもたくさん！食事系からスイーツ、試合が〇回以降から販売されるメニューもあり、試合を見て買い物をしてと大忙し。もちろん、ファストフードの取り扱いもあり！ -->
                    <!-- <br>ちなみに私は、一周回ってサワーと銀だこの組み合わせをマストでいただいています笑 -->
                </p>


                <div class="flex">
                    <?php
                    $sub_img = get_field('sub_img');
                    if ($sub_img): ?>
                        <img class="sub-eyecatch" src="<?php the_field('sub_img'); ?>">
                    <?php endif; ?>
                    <!-- <img class="sub-eyecatch" src="" alt="イラスト"> -->
                    <p class="text">
                        <?php
                        $sub_img = get_field('sub_img');
                        if ($sub_img): ?>
                            <?php the_field('text'); ?>
                        <?php endif; ?>
                        <!-- テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト -->
                    </p>
                </div>

            <?php
            endwhile;
        else:
            ?>
        <?php endif; ?>
    </article>



    <div class="back-link">
        <!-- <a href="<?php echo esc_url(home_url('')); ?>"> -->
        <!-- </a> -->

        <?php
        // 現在の投稿のカテゴリー情報を取得
        $categories = get_the_category();
        if (!empty($categories)) {
            $category = $categories[0]; // 最初のカテゴリーを取得
            $category_slug = $category->slug; // カテゴリースラッグを取得

            // カテゴリーページへのリンクを生成
            $category_link = esc_url(home_url('/' . $category_slug . '/'));

            // カテゴリーに応じた戻るリンクを表示
            echo '<a href="' . $category_link . '">BACK</a>';
        }
        ?>

    </div>

    <div class="before-next-link">
        <!-- <a href="article.html">前の記事</a> -->
        <!-- <a href="article.html">次の記事</a> -->
        <?php
        // previous_post_link('%link', '前の記事へ', true);
        if (get_previous_post()) {
            echo '<div class="prev-link">';
            previous_post_link('< %link', '前の記事', true);
            echo '</div>';
        }
        ?>
        <?php
        // next_post_link('%link', '次の記事へ', true);
        if (get_next_post()) {
            echo '<div class="next-link">';
            next_post_link('%link >', '次の記事', true);
            echo '</div>';
        }
        ?>
    </div>

</main>

<?php get_footer(); ?>