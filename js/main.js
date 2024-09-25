$(function () {
  // ハンバーガーボタン
  // ----------------------
  // ボタンクリック
  $(".toggle_btn").click(function () {
    $("header").toggleClass("open");
  });
  $(".mask").on("click", function () {
    $("header").toggleClass("open");
  });
  //ナビゲーションのリンクがクリックされたらopenクラスが取れて（削除されて）ナビゲーションが閉じる
  $("#nav a").click(function () {
    $("header").removeClass("open");
    //ボタンの openクラスを除去し
  });
  // =====================================
  // スムーススクロール
  $(function () {
    // ページ内のリンクをクリックした時に動作する
    $('a[href^="#"]').click(function () {
      // クリックしたaタグのリンクを取得
      let href = $(this).attr("href");
      // ジャンプ先のid名をセット hrefの中身が#もしくは空欄なら,htmlタグをセット
      let target = $(href == "#" || href == "" ? "html" : href);
      // 「headerの高さ80px」を引いた値からジャンプ先の要素までの距離を取得
      let position = target.offset().top - 80;
      // animateでスムーススクロールを行う   ページトップからpositionだけスクロールする
      // 600はスクロール速度で単位はミリ秒  swingはイージングのひとつ
      $("html, body").animate({ scrollTop: position }, 600, "swing");
      // urlが変化しないようにfalseを返す
      return false;
    });
  });
  // =======================================
  // mainvisualのスライド
  // $(".pic").bgSwitcher({
    //   images: ['img/mainvisual2.jpg','img/item7.jpg','img/item12.jpg'],
    // images: [
      // '<?php echo esc_url(get_template_directory_uri() . "/img/mainvisual2.jpg"); ?>',
      // '<?php echo esc_url(get_template_directory_uri() . "/img/item7.jpg"); ?>',
      // '<?php echo esc_url(get_template_directory_uri() . "/img/item12.jpg"); ?>',
    // ],
    // interval: 3000,
    // loop: true,
  // });

  // ========================================
  // スライダー
  $(".slide-items").slick({
    // 矢印を表示
    // arrows: false,
    // prevArrow: '<div class="slide-arrow prev-arrow></div>',
    //矢印部分PreviewのHTMLを変更
    // nextArrow: '<div class="slide-arrow next-arrow"></div>',
    //矢印部分NextのHTMLを変更
    // スライド下部に点を表示
    dots: true,
    // スライドを中心にして前後のスライドを部分的に表示
    centerMode: true,
    // 両端の見切れるスライド幅
    centerPadding: "28%",
    // 表示するスライドの枚数を設定
    slidesToShow: 1,
    // 自動再生
    autoplay: true,
    // 再生速度（ミリ秒設定）
    autoplaySpeed: 2000,
    // 無限スライド
    infinite: true,

    responsive: [
      {
        breakpoint: 910,
        settings: {
          centerPadding: "19%",
          // 表示するスライド枚数
          slidesToShow: 1,
          // 一度にスクロールするスライドの数
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 430,
        settings: {
          centerPadding: "0",
          // 表示するスライド枚数
          slidesToShow: 1,
          // 一度にスクロールするスライドの数
          slidesToScroll: 1,
        },
      },
    ],
  });

  /*=================================================
トップに戻る
===================================================*/
  let pagetop = $(".to-top");
  // 最初に画面が表示された時は、トップに戻るボタンを非表示に設定
  pagetop.hide();

  // スクロールイベント（スクロールされた際に実行）
  $(window).scroll(function () {
    // スクロール位置が700pxを超えた場合
    if ($(this).scrollTop() > 200) {
      // トップに戻るボタンを表示する
      pagetop.fadeIn();

      // スクロール位置が700px未満の場合
    } else {
      // トップに戻るボタンを非表示にする
      pagetop.fadeOut();
    }
  });
  // クリックイベント（ボタンがクリックされた際に実行）
  pagetop.click(function () {
    // 0.5秒かけてページトップへ移動
    $("body,html").animate({ scrollTop: 0 }, 500);

    // イベントが親要素へ伝播しないための記述
    // ※詳しく知りたい方は「イベント　バブリング」または「jQuery バブリング」で調べてみてください
    return false;
  });

  // アコーディオン
  $(".accordion-title").on("click", function () {
    // クリックしたタイトル以外のopenクラスを外す(－から＋にする)
    $(".accordion-title").not(this).removeClass("open");
    // クリックしたタイトル以外のコンテンツを閉じる
    $(".accordion-title").not(this).next().slideUp(300);
    // クリックしたタイトルにopenクラスを付け外しして＋と－を切り替える
    $(this).toggleClass("open");
    // クリックしたタイトルの次の要素(コンテンツ)を開閉
    $(this).next().slideToggle(300);
  });
});


// jqでmainvisual画像をフェードさせるアニメーション
// チャットGPTより
// jQuery(document).ready(function($) {
  // $(".pic").bgSwitcher({
      // images: [
          // '<?php echo esc_url(get_template_directory_uri() . "/img/mainvisual2.jpg"); ?>',
          // '<?php echo esc_url(get_template_directory_uri() . "/img/item7.jpg"); ?>',
          // '<?php echo esc_url(get_template_directory_uri() . "/img/item12.jpg"); ?>'
          // templatePath + '/img/mainvisual2.jpg',
          // templatePath + '/img/item7.jpg',
      // ],
      // interval: 3000, // 画像が切り替わる間隔
      // loop: true,     // ループするかどうか
      // effect: "fade", // フェード効果
      // duration: 1000  // フェードの時間
  // });
// });

// チャットGPT先生より修正版
// jQuery(document).ready(function($) {
//   // PHPの画像URLをJavaScript変数に渡す
//   var imagePath1 = '<?php echo esc_url(get_template_directory_uri() . "/img/mainvisual2.jpg"); ?>';
//   var imagePath2 = '<?php echo esc_url(get_template_directory_uri() . "/img/item7.jpg"); ?>';
//   var imagePath3 = '<?php echo esc_url(get_template_directory_uri() . "/img/item12.jpg"); ?>';

//   $(".pic").bgSwitcher({
//       images: [imagePath1, imagePath2, imagePath3],
//       interval: 3000, // 画像が切り替わる間隔
//       effect: "fade", // フェード効果
//       duration: 1000  // フェードの速さ
//   });
// });

// チャットGPT先生より再修正版
jQuery(document).ready(function($) {
  // PHPから渡された画像URLを使用してbgSwitcherを初期化
  $(".pic").bgSwitcher({
      images: [
          imagePaths.image1, // PHPから渡されたURL
          imagePaths.image2, // PHPから渡されたURL
          imagePaths.image3  // PHPから渡されたURL
      ],
      interval: 4000,  // 画像が切り替わる間隔
      effect: "fade",  // フェード効果
      duration: 1000   // フェードの速さ
  });
});

