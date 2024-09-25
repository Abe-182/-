<?php get_header('second'); ?>

<!-- <main id="main" class="contact-wrapper"> -->

    <?php if (have_posts()):
        while (have_posts()):
            the_post();
    ?>

            <!-- <h2><span> -->
                    <!-- ご質問 -->
                    <!-- <?php the_title(); ?> -->
                <!-- </span> -->
            <!-- </h2> -->

            <!-- <form action="#"> -->
            <?php the_content(); ?>
            <!-- <dl class="contact-list">
                <dt><label for="name">お名前</label></dt>
                <dd><input type="text" id="name" name="your-name" required></dd>
                <dt><label for="email">e-mail</label></dt>
                <dd><input type="email" id="email" name="your-email" required></dd>
                <dt><label for="favorite">推しチーム</label></dt>
                <dd><select name="favorite" id="favorite" required>
                        <option value="">チームを選択</option>
                        <option value="tigers">阪神タイガース</option>
                        <option value="carp">広島東洋カープ</option>
                        <option value="dena">横浜DeNAベイスターズ</option>
                        <option value="giants">読売ジャイアンツ</option>
                        <option value="swallows">東京ヤクルトスワローズ</option>
                        <option value="chunichi">中日ドラゴンズ</option>
                        <option value="orix">オリックス・バファローズ</option>
                        <option value="lotte">千葉ロッテマリーンズ</option>
                        <option value="softbank">福岡ソフトバンクホークス</option>
                        <option value="eagles">東北楽天ゴールデンイーグルス</option>
                        <option value="seibu">埼玉西武ライオンズ</option>
                        <option value="fighters">北海道日本ハムファイターズ</option>
                    </select></dd>
                <dt><label for="message">質問内容</label></dt>
                <dd><textarea name="your-message" id="message" required></textarea></dd>
            </dl>
            
            <button class="contact-btn" type="submit" id="#">SEND</button> -->
            <!-- </form> -->
    <?php
        endwhile;
    endif;
    ?>

<!-- </main> -->

<?php get_footer(); ?>