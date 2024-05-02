<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

// 绕过 CDN 代理IP获取客户真实IP地址
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $list = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
    $_SERVER['REMOTE_ADDR'] = $list[0];
}
# --------------------------------------------------------------------
# 移除admin bar
# --------------------------------------------------------------------
if(get_theme_mod('biji_opt_remove_admin_bar', true)){
    add_filter('show_admin_bar', '__return_false');
}
# --------------------------------------------------------------------
# 屏蔽字符转码
# --------------------------------------------------------------------
if(get_theme_mod('biji_opt_disable_texturize', true)){
    add_filter('run_wptexturize', '__return_false');
}
# --------------------------------------------------------------------
# 禁用登录页语言切换
# --------------------------------------------------------------------
add_filter('login_display_language_dropdown', '__return_false');

# --------------------------------------------------------------------
# 移除 WP_Head 无关紧要的代码
# --------------------------------------------------------------------
if(get_theme_mod('biji_opt_remove_head_links', true)){
    remove_action( 'wp_head', 'wp_generator');                    //删除 head 中的 WP 版本号
    foreach (['rss2_head', 'commentsrss2_head', 'rss_head', 'rdf_header', 'atom_head', 'comments_atom_head', 'opml_head', 'app_head'] as $action) {
        remove_action( $action, 'the_generator' );
    }
    remove_action( 'wp_head', 'rsd_link' );                        //删除 head 中的 RSD LINK
    remove_action( 'wp_head', 'wlwmanifest_link' );                //删除 head 中的 Windows Live Writer 的适配器？
    remove_action( 'wp_head', 'feed_links_extra', 3 );              //删除 head 中的 Feed 相关的link
    remove_action( 'wp_head', 'index_rel_link' );                //删除 head 中首页，上级，开始，相连的日志链接
    remove_action( 'wp_head', 'parent_post_rel_link', 10);
    remove_action( 'wp_head', 'start_post_rel_link', 10);
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );    //删除 head 中的 shortlink
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10);    // 删除头部输出 WP RSET API 地址
    remove_action( 'template_redirect',    'wp_shortlink_header', 11);        //禁止短链接 Header 标签。
    remove_action( 'template_redirect',    'rest_output_link_header', 11);    // 禁止输出 Header Link 标签。
}
# --------------------------------------------------------------------
# 移除后台界面右上角的帮助
# --------------------------------------------------------------------
if(get_theme_mod('biji_opt_remove_help_tabs', true)){  
    if(is_admin()){
        add_action('in_admin_header', function(){
            global $current_screen;
        $current_screen->remove_help_tabs();
        });
    }
}
# --------------------------------------------------------------------
# 禁止使用 admin 用户名尝试登录
# --------------------------------------------------------------------
if(get_theme_mod('no_admin',true)){
    add_filter( 'wp_authenticate',  function ($user){
        if($user == 'admin') exit;
    });

    add_filter('sanitize_user', function ($username, $raw_username, $strict){
        if($raw_username == 'admin' || $username == 'admin'){
            exit;
        }
        return $username;
    }, 10, 3);
}