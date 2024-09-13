<?php get_header('second'); ?>


<main class="wrapper main-title">
    <?php
    // 現在の固定ページのスラッグを取得
    $page_slug = get_post_field('post_name', get_post());
    // 固定ページスラッグとカテゴリスラッグを対応させる配列
    $category_slugs = array(
        'rice' => 'rice',
        'game' => 'game',
        'view' => 'view',
    );
    // 固定ページのスラッグに対応するカテゴリが存在するか確認
    if (array_key_exists($page_slug, $category_slugs)) {
        $category_slug = $category_slugs[$page_slug];
    } else {
        // 対応するカテゴリがない場合は何もしない（エラーハンドリングも可）
        echo "<p>このページに対応するカテゴリはありません。</p>";
        get_footer();
        exit;
    }
    // ----------------キリトリ-------------------
    // カテゴリースラッグと日本語のカテゴリー名をマッピングする連想配列を作成
    // $category_names = array(
    // 'rice' => 'メシ',
    // 'game' => '試合',
    // 'view' => '風景',
    // );
    // ----------------キリトリ-------------------

    // 追加した部分↓
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    // 追加した部分↑

    // クエリを設定
    $args = array(
        // 投稿タイプ
        'post_type' => 'post',
        // カテゴリーを抽出（フィルタリング）
        'category_name' => $category_slug,
        // 管理画面の設定を使用
        'posts_per_page' => get_option('posts_per_page'), 
        // ページ番号を設定
        'paged' => $paged, 
        // ---------------切り取り↓
        // 全部の投稿を取得
        // 'posts_per_page' => -1
        // ---------------切り取り↑
    );
    // ----------------キリトリ-------------------
    // カテゴリごとにクエリを設定
    // $categories = array('rice', 'game', 'view');
    // foreach ($categories as $category) {
    // 各カテゴリのクエリを作成
    // $args['category_name'] = $category;
    // ----------------キリトリ-------------------

    $query = new WP_Query($args);

    // クエリに投稿があるかチェック
    if ($query->have_posts()): ?>
        <!-- カテゴリー名を日本語で表示 -->
        <h2><span><?php echo esc_html(get_the_title()); ?></span></h2>
        <ul class="grid-item">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(null, array('class' => 'post-thumb')); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/Noimage.png'); ?>" alt="Noimage">
                        <?php endif; ?>
                        <p><?php the_time('Y-m-d'); ?></p>
                        <p><?php the_title(); ?></p>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p> 更新を待っててね</p>
    <?php endif;
    // クエリをリセット
    wp_reset_postdata();
    ?>
</main>

<!-- ページネーション -->
<div class="link">
    <p>
    <!-- ------------------キリトリ↓ -->
    <!-- // 現在のぺーじ番号を取得(デフォルトは１) -->
    <!-- // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; -->
    <!-- // $args = array( -->
        <!-- // 'post_type' => 'post', -->
        <!-- // 'category_name' => $category_slug, -->
        <!-- // 管理画面の設定を使用 -->
        <!-- // 'posts_per_page' => get_option('posts_per_page'), -->
        <!-- // 'posts_per_page' => -1, -->
        <!-- // ページ番号を設定 -->
        <!-- // 'paged' => $paged, -->
    <!-- // ); -->

    <!-- // $query = new WP_Query($args); -->
    <!-- // 全ページ数を取得 -->
    <!-- // $pages = $query->max_num_pages; -->
    <!-- // 取得したページ数を渡す -->
    <!-- // $wp_query->max_num_pages = $pages; -->
        <!-- // キリトリ↑--------------------- -->

    <!-- // ページが複数ある場合 -->
    <?php
    if ($query->max_num_pages > 1) {
        echo paginate_links(array(
            // 'base' => get_pagenum_link(1) .  '%_%',
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format' => 'page/%#%/',
            // 'current' => $paged,
            'current' => max(1, get_query_var('paged')),
            'total' => $query->max_num_pages,
        ));
    }
    ?>
    </p>
    <!-- <p>1</p> -->
    <!-- <a id="article.html" href="rice.html">2</a> -->
</div>

<?php get_footer(); ?>