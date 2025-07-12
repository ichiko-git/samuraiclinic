<?php
// アイキャッチ画像（サムネイル）を有効化
add_theme_support('post-thumbnails');

// カスタム投稿タイプの一覧で表示する最大数を5に設定
function custom_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query()) {
        // voiceカスタム投稿タイプの場合
        if (is_post_type_archive('voice')) {
            $query->set('posts_per_page', 5);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page'); 
?>