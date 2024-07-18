<?php
/**
 * Title:CTA(Call To Action)
 * Slug:mytheme/cta
 * Block Types:core/cover
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/travel-map.jpg')); ?>","id":16,"hasParallax":true,"dimRatio":80,"overlayColor":"secondary","isUserOverlayColor":true,"align":"full"} -->
<div class="wp-block-cover alignfull has-parallax"><span aria-hidden="true"
    class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span>
  <div class="wp-block-cover__image-background wp-image-16 has-parallax"
    style="background-position:50% 50%;background-image:url(<?php echo esc_url(get_theme_file_uri('assets/images/travel-map.jpg')); ?>)">
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