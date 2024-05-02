<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!DOCTYPE html>
<html class="<?php the_skin_mode(); ?>">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
    <?php if ( $_background = get_theme_mod( 'biji_setting_background', '' ) ): ?>
        <style>
            html {
                background-image: url("<?= $_background ?>");
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
        </style>
    <?php endif; ?>
    <!-- Google Tag Manager -->
    <script> (function(w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-WZSCMBL6');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
<div id="app" :class="['layout', animation, '<?= ( $_background ? 'less-animation' : '' ) ?>']" style="display: none;"
     v-show="true">
     <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZSCMBL6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header id="header" class="flex-center justify-between">
        <hgroup class="logo" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
            <h1 class="fullname" itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                <a class="flex-center" href="<?php bloginfo( 'url' ); ?>">
                    <svg class="slogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <path d="M11.4,85.1l.18.09s.12.06.2.11c.32.14.68.22,1.06.23h.17s7.35,0,7.35,0c.84,0,1.62-.32,2.22-.91.59-.59.91-1.37.91-2.2,0-1.72-1.41-3.12-3.14-3.12h-4.25v-18.73c.02-.3,0-.57-.04-.79-.16-.97-.67-1.76-1.42-2.23l-.37-.29-6.81-6.81,7.57-7.58c.38-.34.66-.73.83-1.16.08-.19.11-.35.15-.5l.04-.14c.04-.23.06-.57.05-.86v-18.99h4.25c1.76,0,3.14-1.32,3.14-3.02,0-.83-.32-1.6-.9-2.17-.59-.58-1.38-.9-2.22-.9l-7.39.05c-.39,0-.78.08-1.16.23-.1.06-.18.11-.25.14l-.17.08c-.07.03-.13.06-.19.1-.12.08-.24.2-.36.31l-.16.13c-.09.1-.19.23-.29.37l-.08.11c-.07.12-.14.26-.2.39l-.07.13c-.04.1-.06.21-.08.31-.02.1-.06.2-.09.31-.02.1-.06.22-.09.33-.01.03,0,0,0-.05-.02.22-.07.41-.12.56l.09,20.57L.9,48.08c-.6.6-.91,1.41-.9,2.28v.05s0,.05,0,.05c-.03.87.3,1.69.92,2.31l8.82,8.89-.09,20.4c.05.15.1.35.12.57,0,.07.02.13.03.2.04.1.08.2.11.3.04.14.07.26.11.37.03.06.07.12.09.19.05.11.11.23.18.35l.11.16c.09.13.18.24.27.34.05.04.11.09.16.13.12.11.23.22.36.31.07.05.14.08.21.11Z" />
                        <path d="M96.71,50.28c.03-.98-.3-1.8-.92-2.42l-8.81-8.89.09-20.4c-.05-.15-.1-.35-.12-.57,0-.06-.02-.12-.03-.19-.05-.11-.08-.22-.11-.32-.03-.12-.06-.24-.1-.35-.04-.07-.07-.13-.1-.2-.06-.12-.12-.24-.18-.35l-.1-.14c-.08-.12-.18-.24-.28-.34-.05-.04-.11-.09-.16-.13-.12-.11-.24-.22-.37-.31-.08-.05-.15-.08-.23-.12l-.13-.07c-.07-.04-.16-.08-.24-.13-.29-.12-.65-.2-1.03-.22h-.17s-7.35,0-7.35,0c-.84,0-1.62.32-2.22.91-.59.59-.91,1.37-.91,2.2,0,1.72,1.41,3.12,3.14,3.12h4.25v18.74c-.02.3,0,.56.04.78.16.97.67,1.76,1.42,2.23l.37.29,6.81,6.81-7.57,7.58c-.38.34-.66.73-.83,1.16-.08.19-.11.34-.15.5l-.04.15c-.04.23-.06.57-.05.85v19h-4.25c-1.76,0-3.14,1.32-3.14,3.02,0,.83.32,1.6.91,2.17.59.58,1.38.9,2.22.9l7.39-.05c.39,0,.78-.08,1.15-.22l.43-.23c.07-.03.14-.06.2-.1.1-.07.23-.19.36-.31l.15-.13c.09-.1.2-.23.29-.37l.08-.11c.07-.12.14-.26.2-.39l.06-.13c.04-.11.06-.22.09-.33.02-.09.05-.19.09-.29.02-.11.06-.22.09-.33.01-.03,0,.01,0,.06.02-.23.07-.43.12-.58l-.09-20.56,8.84-8.89c.59-.6.91-1.41.89-2.29Z" />
                        <path d="M66.15,2.66c-.38-.31-.95-.67-1.51-.67h-.24s-21.12-1.99-21.12-1.99c-.05,0-.11.02-.17.03-.05,0-.1.02-.15.02-.15.06-.3.1-.44.13-.13.02-.25.05-.36.09-.06.02-.12.06-.19.09l-.38.18c-.13.07-.27.18-.4.28l-.15.11c-.08.07-.19.19-.32.34l-.08.09c-.09.12-.17.26-.24.38l-.08.13c-.06.13-.09.25-.13.36-.02.06-.05.13-.08.2,0,.02,0,.06-.01.1l-.03.19c-.02.09-.04.19-.06.28l-7.23,78.65c-.14.92.1,1.8.68,2.48l9.51,11.3c.04.06.07.12.11.18.6.72,1.48,1.13,2.41,1.13h0c.74,0,1.44-.25,2.01-.73l11.49-9.66c.12-.1.25-.23.39-.41l.07-.09c.4-.54.6-1.11.63-1.73l5.55-60.43.05-.18c.06-.22.1-.4.11-.54.01-.14,0-.3-.01-.51l-.02-.19,1.55-16.88c.09-1.03-.34-2.04-1.15-2.7ZM54.1,80.55l-14.83-1.28,5.06-55.05,14.82,1.29-5.06,55.05ZM59.73,19.27l-14.82-1.28,1.04-11.32,14.82,1.29-1.04,11.31Z" />
                    </svg>
                    <?php bloginfo( 'name' ); ?>
                </a>
            </h1>
            <meta itemprop="name" content="<?php bloginfo( 'name' ); ?>">
            <meta itemprop="url" content="<?php bloginfo( 'url' ); ?>">
        </hgroup>
        <section class="header__right d-flex">
            <form method="get" action="<?php bloginfo( 'url' ); ?>" class="search" style="margin-right:10px;">
                <input class="search-key btn btn-link btn-action right-btn uni-bg uni-shadow" name="s" placeholder="Please enter..." type="text"
                       required="required"/>
                <i class="text-small czs-search-l flex-center"></i>
            </form>
            <div class="dropdown" hover-show perspective style="margin-right:10px;">
                <a class="btn btn-link btn-action uni-bg bg-blur uni-shadow dropdown-toggle flex-center"
                href="javascript:void(0);" tabindex="0">
                    <i class="text-small czs-sun flex-center"></i>
                </a>
                <ul class="menu menu-left mode-switch uni-card uni-bg bg-blur uni-shadow text-center" @click="toggleSkinMode" style="min-width: 120px;">
                    <li v-for="item of modeList" class="menu-item">
                        <a class="flex-center" :data-mode="item.mode" href="javascript:void(0);">
                            <i :class="[item.icon, 'mr-1 mt-1']"></i>{{ item.name }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="dropdown" hover-show perspective>
                <a class="btn btn-link btn-action uni-bg bg-blur uni-shadow dropdown-toggle flex-center"
                href="javascript:void(0);" tabindex="0">
                    <i class="czs-earth"></i>
                </a>
                <ul class="menu menu-left mode-switch uni-card uni-bg bg-blur uni-shadow" @click="toggleLanguage" style="min-width: 130px;">
                    <li v-for="item of langList" class="menu-item">
                        <a class="flex-center" :data-mode="item.mode" href="javascript:void(0);">
                            <i :class="[item.icon, 'mr-1']"></i>{{ item.name }}
                        </a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-link btn-action right-btn uni-bg uni-shadow menu-btn off-canvas-toggle flex-center ml-2" href="#aside">
                <i class="text-large czs-menu-l flex-center"></i>
            </a>
        </section>
    </header>
    <section id="core" class="container off-canvas off-canvas-sidebar-show">
        <!-- Aside -->
        <aside id="aside" class="off-canvas-sidebar">
            <div class="probes"></div>
            <section class="sticky">
                <?php if ( is_single() && get_theme_mod( 'biji_setting_toc', true ) && ( $_toc = get_post_toc() ) ) : ?>
                    <input type="radio" id="tab-toc" name="aside-radio" hidden checked>
                    <input type="radio" id="tab-nav" name="aside-radio" hidden>
                    <ul class="aside-tab">
                        <li class="toc-active">
                            <label for="tab-toc" class="c-hand flex flex-center"><i class="czs-read-l"></i></label>
                        </li>
                        <li class="nav-active">
                            <label for="tab-nav" class="c-hand flex flex-center"><i
                                        class="czs-choose-list-l"></i></label>
                        </li>
                    </ul>
                    <?php print $_toc;
                endif;
                foreach ( [ 'header_nav', 'footer_nav' ] as $name ) {
                    if ( has_nav_menu( $name ) ) {
                        wp_nav_menu( [
                            'container'      => false,
                            'theme_location' => $name,
                            'menu_class'     => $name . ' reset-ul uni-bg uni-shadow ',
                            'depth'          => 0,
                        ] );
                    }
                }
                dynamic_sidebar( 'aside-widget-area' );
                ?>
            </section>
        </aside>
        <a class="off-canvas-overlay" href="#close"></a>
        <!-- Main -->
        <main id="main" class="uni-bg uni-shadow off-canvas-content">
            <div class="content">