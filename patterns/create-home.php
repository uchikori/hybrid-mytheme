<?php
/**
 * Title:トップページを元にしたひな形
 * Slug: mytheme/create-home
 * Categories:mypagebase
 * Block Types: core/post-content
 * Post types:page
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"var:preset|spacing|70"}},"color":{"gradient":"linear-gradient(155deg,rgba(0,0,0,0) 50%,rgba(0,0,0,0.06) 50%)"}},"layout":{"type":"constrained","contentSize":"980px","wideSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background"
  style="background:linear-gradient(155deg,rgba(0,0,0,0) 50%,rgba(0,0,0,0.06) 50%);padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
  <!-- wp:columns {"align":"wide","className":"is-style-reverse","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
  <div class="wp-block-columns alignwide is-style-reverse" style="padding-right:0;padding-left:0">
    <!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%">
      <!-- wp:paragraph -->
      <p>旅に思いを馳せる</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
      <h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50)">Travel Times</h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"fontSize":"small"} -->
      <p class="has-small-font-size">ここからどこかに出かけよう。知らない街へ、海へ、山へ<br>見知らぬ美味しいものに出会いに。</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill","fontSize":"small"} -->
        <div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size"><a
            class="wp-block-button__link wp-element-button">旅を計画する</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->

      <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
      <div class="wp-block-group">
        <!-- wp:paragraph {"className":"is-style-scroll-down","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray","fontFamily":"josefin-sans"} -->
        <p class="is-style-scroll-down has-dark-gray-color has-text-color has-link-color has-josefin-sans-font-family">
          Scroll</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%">
      <!-- wp:cover {"url":"http://localhost/wp-blocktheme/wp-content/uploads/2024/07/ancient.jpg","id":460,"dimRatio":0,"customOverlayColor":"#958c79","isUserOverlayColor":true,"minHeight":570,"isDark":false,"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover is-light" style="min-height:570px"><span aria-hidden="true"
          class="wp-block-cover__background has-background-dim-0 has-background-dim"
          style="background-color:#958c79"></span><img class="wp-block-cover__image-background wp-image-460" alt=""
          src="http://localhost/wp-blocktheme/wp-content/uploads/2024/07/ancient.jpg" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
          <!-- wp:paragraph {"align":"center","placeholder":"タイトルを入力...","fontSize":"large"} -->
          <p class="has-text-align-center has-large-font-size"></p>
          <!-- /wp:paragraph -->
        </div>
      </div>
      <!-- /wp:cover -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.8"},"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"fontSize":"large"} -->
  <h2 class="wp-block-heading has-text-align-center has-large-font-size"
    style="margin-top:var(--wp--preset--spacing--80);font-style:normal;font-weight:400;line-height:1.8">
    身近な旅から遠くの旅まで<br>ここから、いつでも、どこへでも</h2>
  <!-- /wp:heading -->

  <!-- wp:group {"layout":{"type":"constrained","contentSize":"500px"}} -->
  <div class="wp-block-group">
    <!-- wp:image {"id":483,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
    <figure class="wp-block-image aligncenter size-full is-style-default"><img
        src="http://localhost/wp-blocktheme/wp-content/uploads/2024/07/stamp.png" alt="" class="wp-image-483"
        style="object-fit:cover" /></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}},"color":{"gradient":"linear-gradient(20deg,rgba(0,0,0,0) 50%,rgba(0,0,0,0.06) 50%)"}},"layout":{"type":"constrained","contentSize":"980px","wideSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background"
  style="background:linear-gradient(20deg,rgba(0,0,0,0) 50%,rgba(0,0,0,0.06) 50%);margin-top:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
  <!-- wp:query {"queryId":4,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"enhancedPagination":true,"align":"wide"} -->
  <div class="wp-block-query alignwide">
    <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group">
      <!-- wp:post-featured-image {"isLink":true,"height":"250px"} /-->

      <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
    <p class="has-text-align-right has-contrast-color has-text-color has-link-color"><a
        href="http://localhost/wp-blocktheme/blog/" data-type="page" data-id="443">View More »</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"クエリーが結果を返さない場合に表示するテキスト、またはブロックを追加してください。"} -->
    <p></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
  </div>
  <!-- /wp:query -->
</div>
<!-- /wp:group -->