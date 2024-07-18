<?php
/**
 * Title:Aboutページを元にしたひな形
 * Slug: mytheme/create-page
 * Categories:mypagebase
 * Block Types: core/post-content
 * Post types:page
 */
?>
<!-- wp:heading {"textAlign":"center","align":"wide","className":"is-style-decoration-line"} -->
<h2 class="wp-block-heading alignwide has-text-align-center is-style-decoration-line">旅のブログ</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Travel
  Timesでは旅先から届いた記事を中心に、旅に関する情報を幅広くご紹介しています。どこの国で何をしたらいいか分からないときや、旅の途中で迷ったとき、現地に近い情報が必要なときなどには、Timesで旅のプランを立ててみてください。</p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"linkTo":"none","align":"wide"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-default is-cropped">
  <!-- wp:image {"id":17,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px"}}}} -->
  <figure class="wp-block-image size-large has-custom-border"><img
      src="http://localhost/wp-blocktheme/wp-content/uploads/2022/09/photo01-720x1024.jpg" alt="" class="wp-image-17"
      style="border-top-left-radius:20px" /></figure>
  <!-- /wp:image -->

  <!-- wp:image {"id":14,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px"}}}} -->
  <figure class="wp-block-image size-large has-custom-border"><img
      src="http://localhost/wp-blocktheme/wp-content/uploads/2022/09/photo02-720x1024.jpg" alt="" class="wp-image-14"
      style="border-top-left-radius:20px" /></figure>
  <!-- /wp:image -->

  <!-- wp:image {"id":15,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px"}}}} -->
  <figure class="wp-block-image size-large has-custom-border"><img
      src="http://localhost/wp-blocktheme/wp-content/uploads/2022/09/photo03-720x1024.jpg" alt="" class="wp-image-15"
      style="border-top-left-radius:20px" /></figure>
  <!-- /wp:image -->
</figure>
<!-- /wp:gallery -->

<!-- wp:group {"align":"wide","style":{"border":{"width":"4px","color":"#275997","radius":"5px"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-border-color"
  style="border-color:#275997;border-width:4px;border-radius:5px;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:0;padding-bottom:0">
  <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary","textColor":"base"} -->
  <h3
    class="wp-block-heading has-text-align-center has-base-color has-secondary-background-color has-text-color has-background has-link-color"
    style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">旅の計画</h3>
  <!-- /wp:heading -->

  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:paragraph -->
    <p>旅を計画するときはフライトスケジュールを旅程に追加して考えると、旅行の詳細について興味深く新鮮な視点が見えてきます。それに基づいて旅程をカスタマイズすることで、自分で計画を立てるよりもずっと楽しく、時間を節約できるからです。
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p>一度にたくさんの場所を巡るのも楽しいのですが、一箇所にロングステイしてみるのもおすすめです。住んでみないとわからない・見れない・感じられない、現地ローカルだからこそ知ることができる魅力にふれることができます。</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"categories":["my-theme"],"patternName":"core/block/508","name":"Frame"},"align":"wide","style":{"border":{"width":"4px","color":"#275997","radius":"5px"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-border-color"
  style="border-color:#275997;border-width:4px;border-radius:5px;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:0;padding-bottom:0">
  <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary","textColor":"base"} -->
  <h3
    class="wp-block-heading has-text-align-center has-base-color has-secondary-background-color has-text-color has-background has-link-color"
    style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">一日目の計画</h3>
  <!-- /wp:heading -->

  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:paragraph -->
    <p>旅を計画するときはフライトスケジュールを旅程に追加して考えると、旅行の詳細について興味深く新鮮な視点が見えてきます。それに基づいて旅程をカスタマイズすることで、自分で計画を立てるよりもずっと楽しく、時間を節約できるからです。
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p>一度にたくさんの場所を巡るのも楽しいのですが、一箇所にロングステイしてみるのもおすすめです。住んでみないとわからない・見れない・感じられない、現地ローカルだからこそ知ることができる魅力にふれることができます。</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:cover {"url":"http://localhost/wp-blocktheme/wp-content/uploads/2022/09/travel-map.jpg","id":16,"hasParallax":true,"dimRatio":80,"overlayColor":"secondary","isUserOverlayColor":true,"align":"full"} -->
<div class="wp-block-cover alignfull has-parallax"><span aria-hidden="true"
    class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span>
  <div class="wp-block-cover__image-background wp-image-16 has-parallax"
    style="background-position:50% 50%;background-image:url(http://localhost/wp-blocktheme/wp-content/uploads/2022/09/travel-map.jpg)">
  </div>
  <div class="wp-block-cover__inner-container">
    <!-- wp:paragraph {"align":"center","placeholder":"タイトルを入力...","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size">身近な旅から遠くの旅まで<br>ここから、いつでも、どこへでも</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
      <!-- wp:button -->
      <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">旅を計画する</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
</div>
<!-- /wp:cover -->