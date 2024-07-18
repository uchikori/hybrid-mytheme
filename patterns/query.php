<?php
/**
 * Title:記事一覧
 * Slug:mytheme/query
 * Categories:query
 * Block Types:core/query
 */
?>
<!-- wp:query {"queryId":4,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"enhancedPagination":true,"align":"wide"} -->
<div class="wp-block-query alignwide">
  <!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
  <div class="wp-block-group">
    <!-- wp:post-featured-image {"isLink":true,"height":"250px"} /-->

    <!-- wp:post-title {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
  </div>
  <!-- /wp:group -->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
  <!-- wp:query-pagination-previous {"label":"Newer"} /-->

  <!-- wp:query-pagination-numbers /-->

  <!-- wp:query-pagination-next {"label":"Older"} /-->
  <!-- /wp:query-pagination -->

  <!-- wp:query-no-results -->
  <!-- wp:paragraph {"placeholder":"クエリーが結果を返さない場合に表示するテキスト、またはブロックを追加してください。"} -->
  <p></p>
  <!-- /wp:paragraph -->
  <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->