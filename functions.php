<?php

function mytheme_soppurts() {
  //コアブロックの追加分のCSSを読み込む
  add_theme_support('wp-block-styles');

  //テーマのCSS（style.css）をエディターに読み込む
  add_editor_style('style.css');

  //add_editor_styleを有効化
  add_theme_support('editor-styles');

  //ページのタイトルの出力を有効化
  add_theme_support('title-tag');

  //HTML5対応を有効化
  add_theme_support('html5', array(
    'style',
    'script',
  ));

  //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

  //埋め込みブロックのレスポンシブを有効化
  add_theme_support('responsive-embeds');

  // ブロックベースのテンプレートパーツエディターを有効化
  add_theme_support( 'block-template-parts' );
}
add_action('after_setup_theme', 'mytheme_soppurts');

function mytheme_enqueue(){
  //テーマのCSS(style.css)をフロントに読み込む
  wp_enqueue_style('mytheme_style', get_stylesheet_uri(), array(), filemtime(get_theme_file_path('style.css')));

  // JavaScriptファイルをキューに追加
  wp_enqueue_script('my-script', get_template_directory_uri().'/assets/js/main.js', array(), null, true);

  // Ajax用のURLをJavaScriptに渡す
  wp_localize_script('my-script', 'ajax_object', array(
      'ajax_url' => admin_url('admin-ajax.php')
  ));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

//ブロックスタイルを追加
function mytheme_register_block_styles(){
  //見出し・飾り枠付き
  register_block_style(
    'core/heading',
    array(
      'name' => 'decoration-line',
      'label' => '丸付飾り枠'
    )
  );
  //カテゴリー一覧
  register_block_style(
    'core/categories',
    array(
      'name' => 'no-listmark',
      'label' => 'リストマーク無し'
    )
  );
  //投稿日・時計アイコン
  register_block_style(
    'core/post-date',
    array(
      'name' => 'clock-icon',
      'label' => '時計アイコン'
    )
  );
  //テンプレートパーツ、上マージン削除
  register_block_style(
    'core/template-part',
    array(
      'name' => 'rm-margin-top',
      'label' => '上マージン削除'
    )
  );
  register_block_style(
    'core/paragraph',
    array(
      'name' => 'scroll-down',
      'label' => 'スクロールダウン'
    )
  );
  register_block_style(
    'core/columns',
    array(
      'name' => 'reverse',
      'label' => 'モバイル逆順'
    )
  );
  register_block_style(
    'core/post-navigation-link',
    array(
      'name' => 'reverse',
      'label' => 'ラベル逆配置'
    )
  );
}
add_action('init', 'mytheme_register_block_styles');

//ブロックパターンのカテゴリー
function mytheme_block_pattern(){
  //My Page Baseカテゴリーを追加
  register_block_pattern_category(
    'mypagebase',
    array('label' => 'My Page Base')
  );

  // remove_theme_support('core-block-patterns');
}
add_action('init', 'mytheme_block_pattern');

//使用許可ブロック
// function mytheme_allowed_block_types($allowed_block_types, $editor_context){
//   if(!empty($editor_context->post)){
//     $allowed_block_types = array(
//       'core/heading',
//       'core/paragraph',
//       'core/image'
//     );
//   }

//   return $allowed_block_types;
// }
// add_filter('allowed_block_types_all', 'mytheme_allowed_block_types', 10, 2);

//メタデータ
function mytheme_meta(){
  //サイト名
  $site_name = esc_attr(get_bloginfo('name'));
  //ページのタイトル
  $title = esc_attr(wp_get_document_title());

  //代替アイキャッチ画像
  $image_url = esc_url(get_theme_file_uri('assets/images/ancient.jpg'));
  $image_w = '1800';
  $image_h = '1196';

  //トップページ
  if(is_front_page()){
    $url = esc_url(home_url('/'));
    $description = esc_attr(get_bloginfo('description'));
    $type = 'website';
  }

  //記事・固定ページ
  if(is_singular() && ! is_front_page()){
    $url = esc_url(get_permalink());
    $description = esc_attr(get_the_excerpt());
    $type = 'article';

    //アイキャッチ画像
    $image_id = get_post_thumbnail_id();
    if($image_id){
      $image_url = esc_url(wp_get_attachment_url($image_id));
      $image_w = esc_attr(wp_get_attachment_metadata($image_id)['width']);
      $image_h = esc_attr(wp_get_attachment_metadata($image_id)['height']);
    }
  }

  if(is_front_page() || is_singular()){
    ?>
<meta property="og:site_name" content="<?php echo $site_name; ?>">
<meta property="og:locale" content="ja_JP">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:image" content="<?php echo $image_url; ?>">
<meta property="og:image:width" content="<?php echo $image_w; ?>">
<meta property="og:image:height" content="<?php echo $image_h; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="<?php echo $type; ?>">
<meta name="twitter:card" content="summary_large_image">
<?php
  }
}
add_action('wp_head', 'mytheme_meta');

// 日付指定のイベントを取得するためのカスタム関数
function get_events_by_date($date) {
    $args = array(
        'post_type'      => 'tribe_events',
        'post_status'    => 'publish',
        'meta_query'     => array(
            array(
                'key'     => '_EventStartDate',
                'value'   => $date,
                'compare' => 'LIKE', // 日付の一部一致
            )
        ),
    );
    
    $query = new WP_Query($args);
    
    $events = array();
    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            $events[] = array(
                'title' => get_the_title(),
                'link'  => get_permalink(),
                'date'  => get_the_date(),
            );
        }
    }
    
    wp_reset_postdata();
    
    return $events;
}

// REST APIエンドポイントを作成して、JavaScriptからアクセスできるようにする
add_action('rest_api_init', function() {
    register_rest_route('my-namespace/v1', '/events/(?P<date>\d{4}-\d{2}-\d{2})', array(
        'methods'  => 'GET',
        'callback' => 'get_events_by_date',
    ));
});

function load_post_content() {
    // 投稿IDを取得
    $post_id = $_POST['post_id'];
    $post = get_post($post_id);

    // データを取得
    $title = get_the_title($post);
    $thumbnail = get_the_post_thumbnail_url($post, 'full');
    $content = apply_filters('the_content', $post->post_content);

    // JSONで返すデータを構築
    $response = array(
        'title' => $title,
        'thumbnail' => $thumbnail,
        'content' => $content,
    );

    // JSON形式で返す
    wp_send_json($response);
}
add_action('wp_ajax_load_post_content', 'load_post_content');
add_action('wp_ajax_nopriv_load_post_content', 'load_post_content');