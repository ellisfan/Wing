<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/*
Template Name: ICON图标
*/
get_header();
?>
<article class="article" itemscope itemtype="https://schema.org/Article">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            require_once( "inc/article-header.php" ); ?>
            <div class="article-content" itemprop="articleBody">
                <ul id="<?= ( is_super_admin() ? 'Links' : '' ) ?>"
                    class="article-cards article-links columns reset-ul">
                    <?php the_friendly_links(); ?>
                </ul>
                <?php the_content(); ?>
            </div>
        <?php
        endwhile;
    endif;
    ?>
    <div class="icon-lists" style="display:flex;align-items:center;flex-wrap:wrap;"></div>
</article>
<script>
    const icons=[{key:'czs-about'},{key:'czs-about-l'},{key:'czs-add'},{key:'czs-airplane'},{key:'czs-airplane-l'},{key:'czs-alipay'},{key:'czs-analysis'},{key:'czs-android'},{key:'czs-angle-down-l'},{key:'czs-angle-left-l'},{key:'czs-angle-right-l'},{key:'czs-angle-up-l'},{key:'czs-apple'},{key:'czs-arrow-down-l'},{key:'czs-arrow-up-l'},{key:'czs-baiduwangpan'},{key:'czs-bar-chart'},{key:'czs-bar-chart-l'},{key:'czs-battery'},{key:'czs-battery-l'},{key:'czs-bell'},{key:'czs-bell-l'},{key:'czs-bevel'},{key:'czs-bilibili'},{key:'czs-bitcoin'},{key:'czs-blackboard'},{key:'czs-blackboard-l'},{key:'czs-block'},{key:'czs-block-l'},{key:'czs-bluetooth'},{key:'czs-bluetooth-l'},{key:'czs-board'},{key:'czs-board-l'},{key:'czs-book'},{key:'czs-book-l'},{key:'czs-bookmark'},{key:'czs-bookmark-l'},{key:'czs-books'},{key:'czs-books-l'},{key:'czs-bot'},{key:'czs-bot-l'},{key:'czs-box'},{key:'czs-box-l'},{key:'czs-briefcase'},{key:'czs-briefcase-l'},{key:'czs-brush'},{key:'czs-brush-l'},{key:'czs-bug'},{key:'czs-bug-l'},{key:'czs-building'},{key:'czs-building-l'},{key:'czs-buy'},{key:'czs-buy-l'},{key:'czs-calculator'},{key:'czs-calculator-l'},{key:'czs-calendar'},{key:'czs-calendar-l'},{key:'czs-camber'},{key:'czs-camber-l'},{key:'czs-camber-o'},{key:'czs-camera'},{key:'czs-camera-l'},{key:'czs-car'},{key:'czs-car-l'},{key:'czs-category-l'},{key:'czs-certificate'},{key:'czs-certificate-l'},{key:'czs-chemistry'},{key:'czs-chemistry-l'},{key:'czs-choose-list-l'},{key:'czs-chrome'},{key:'czs-circle'},{key:'czs-circle-l'},{key:'czs-circle-o'},{key:'czs-clip-l'},{key:'czs-clock'},{key:'czs-clock-l'},{key:'czs-close-l'},{key:'czs-clothes'},{key:'czs-clothes-l'},{key:'czs-cloud'},{key:'czs-cloud-download-l'},{key:'czs-cloud-l'},{key:'czs-cloud-upload-l'},{key:'czs-code-branch'},{key:'czs-code-file'},{key:'czs-code-file-l'},{key:'czs-code-fork'},{key:'czs-code-l'},{key:'czs-coin'},{key:'czs-coin-l'},{key:'czs-collection'},{key:'czs-come-l'},{key:'czs-command'},{key:'czs-command-l'},{key:'czs-commed2'},{key:'czs-commed2-l'},{key:'czs-comment'},{key:'czs-comment-l'},{key:'czs-computer'},{key:'czs-computer-l'},{key:'czs-configuration'},{key:'czs-configuration-l'},{key:'czs-container'},{key:'czs-container-l'},{key:'czs-control'},{key:'czs-control-rank'},{key:'czs-credit-card'},{key:'czs-credit-card-l'},{key:'czs-crown'},{key:'czs-crown-l'},{key:'czs-css3'},{key:'czs-cube'},{key:'czs-cube-l'},{key:'czs-cup'},{key:'czs-cup-l'},{key:'czs-dashboard'},{key:'czs-dashboard-l'},{key:'czs-dev-board'},{key:'czs-dev-board-l'},{key:'czs-d-glasses'},{key:'czs-diamond'},{key:'czs-diamond-l'},{key:'czs-doc-edit'},{key:'czs-doc-edit-l'},{key:'czs-doc-file'},{key:'czs-doc-file-l'},{key:'czs-download-l'},{key:'czs-dribbble'},{key:'czs-dropbox'},{key:'czs-earth'},{key:'czs-earth-l'},{key:'czs-eye'},{key:'czs-eye-l'},{key:'czs-face'},{key:'czs-facebook'},{key:'czs-face-l'},{key:'czs-file'},{key:'czs-file-l'},{key:'czs-film'},{key:'czs-film-l'},{key:'czs-fingerprint'},{key:'czs-fingerprint-l'},{key:'czs-fire-l'},{key:'czs-firewall'},{key:'czs-firewall-l'},{key:'czs-folder'},{key:'czs-folder-l'},{key:'czs-forum'},{key:'czs-forum-l'},{key:'czs-game'},{key:'czs-game-l'},{key:'czs-gene'},{key:'czs-gift'},{key:'czs-gift-l'},{key:'czs-github'},{key:'czs-github-logo'},{key:'czs-Google'},{key:'czs-greatwall'},{key:'czs-hacker'},{key:'czs-hammer'},{key:'czs-hammer-l'},{key:'czs-hand-bevel'},{key:'czs-hand-button'},{key:'czs-hande-vertical'},{key:'czs-hand-gather'},{key:'czs-hand-grasp'},{key:'czs-hand-horizontal'},{key:'czs-hand-pointer'},{key:'czs-hand-slide'},{key:'czs-hand-stop'},{key:'czs-hand-touch'},{key:'czs-hdmi'},{key:'czs-hdmi-l'},{key:'czs-headset'},{key:'czs-headset-l'},{key:'czs-heart'},{key:'czs-heart-l'},{key:'czs-home'},{key:'czs-home-l'},{key:'czs-html5'},{key:'czs-image'},{key:'czs-image-l'},{key:'czs-inbox'},{key:'czs-inbox-l'},{key:'czs-info-l'},{key:'czs-Instagram'},{key:'czs-key'},{key:'czs-keyboard'},{key:'czs-keyboard-l'},{key:'czs-key-l'},{key:'czs-label-info'},{key:'czs-label-info-l'},{key:'czs-laptop'},{key:'czs-laptop-l'},{key:'czs-layers'},{key:'czs-layout-grid'},{key:'czs-layout-grids'},{key:'czs-layout-list'},{key:'czs-light'},{key:'czs-light-flash-l'},{key:'czs-light-l'},{key:'czs-lightning'},{key:'czs-lightning-l'},{key:'czs-link-l'},{key:'czs-linux'},{key:'czs-list-clipboard'},{key:'czs-list-clipboard-l'},{key:'czs-location'},{key:'czs-location-l'},{key:'czs-lock'},{key:'czs-lock-l'},{key:'czs-map'},{key:'czs-map-l'},{key:'czs-medal'},{key:'czs-medal-l'},{key:'czs-menu-l'},{key:'czs-message'},{key:'czs-message-l'},{key:'czs-microchip'},{key:'czs-microchip-l'},{key:'czs-microphone'},{key:'czs-microphone-l'},{key:'czs-microsoft'},{key:'czs-mobile'},{key:'czs-mobile-l'},{key:'czs-moments'},{key:'czs-money'},{key:'czs-moon'},{key:'czs-moon-l'},{key:'czs-more'},{key:'czs-mouse'},{key:'czs-mouse-l'},{key:'czs-music'},{key:'czs-music-file'},{key:'czs-music-file-l'},{key:'czs-music-l'},{key:'czs-music-note'},{key:'czs-music-note-l'},{key:'czs-nail'},{key:'czs-nail-l'},{key:'czs-nas'},{key:'czs-nas-l'},{key:'czs-network'},{key:'czs-network-l'},{key:'czs-new'},{key:'czs-new-l'},{key:'czs-newspaper'},{key:'czs-newspaper-l'},{key:'czs-operation'},{key:'czs-operation-l'},{key:'czs-out-l'},{key:'czs-pad'},{key:'czs-pad-l'},{key:'czs-paper'},{key:'czs-paper-l'},{key:'czs-paper-plane'},{key:'czs-paper-plane-l'},{key:'czs-pause-l'},{key:'czs-paypal'},{key:'czs-pen'},{key:'czs-pen-write'},{key:'czs-people'},{key:'czs-phone'},{key:'czs-phone-l'},{key:'czs-pinterest'},{key:'czs-pixel'},{key:'czs-platform'},{key:'czs-platform-l'},{key:'czs-play-l'},{key:'czs-plugin'},{key:'czs-pokemon-ball'},{key:'czs-port'},{key:'czs-port-l'},{key:'czs-printer'},{key:'czs-printer-l'},{key:'czs-product'},{key:'czs-program'},{key:'czs-program-framework'},{key:'czs-program-l'},{key:'czs-prototype'},{key:'czs-prototype-l'},{key:'czs-prototype-select'},{key:'czs-prototype-select-l'},{key:'czs-qq'},{key:'czs-qrcode-l'},{key:'czs-quadrotor'},{key:'czs-quote-left'},{key:'czs-quote-right'},{key:'czs-qzone'},{key:'czs-raspberry'},{key:'czs-raspberry-l'},{key:'czs-read'},{key:'czs-read-l'},{key:'czs-red-envelope'},{key:'czs-renew'},{key:'czs-right-clipboard'},{key:'czs-right-clipboard-l'},{key:'czs-robot'},{key:'czs-robot2'},{key:'czs-robot2-l'},{key:'czs-robot-l'},{key:'czs-rocket'},{key:'czs-rocket-l'},{key:'czs-rollerbrush'},{key:'czs-rollerbrush-l'},{key:'czs-router'},{key:'czs-router-l'},{key:'czs-rss'},{key:'czs-ruler'},{key:'czs-ruler-l'},{key:'czs-save'},{key:'czs-save-l'},{key:'czs-scan-l'},{key:'czs-scissors'},{key:'czs-sdcard'},{key:'czs-sdcard-l'},{key:'czs-search-l'},{key:'czs-server'},{key:'czs-server-l'},{key:'czs-servers'},{key:'czs-setting'},{key:'czs-setting-l'},{key:'czs-share'},{key:'czs-shield'},{key:'czs-shield-l'},{key:'czs-shop'},{key:'czs-shop-l'},{key:'czs-shopping-cart'},{key:'czs-shopping-cart-l'},{key:'czs-site-folder'},{key:'czs-site-folder-l'},{key:'czs-slider-l'},{key:'czs-square'},{key:'czs-square-l'},{key:'czs-square-o'},{key:'czs-star'},{key:'czs-star-l'},{key:'czs-steam'},{key:'czs-storage'},{key:'czs-storage-l'},{key:'czs-sun'},{key:'czs-sun-l'},{key:'czs-sword'},{key:'czs-sword-l'},{key:'czs-tab'},{key:'czs-tab-l'},{key:'czs-tag'},{key:'czs-tag-l'},{key:'czs-taiji'},{key:'czs-talk'},{key:'czs-talk-l'},{key:'czs-taobao'},{key:'czs-t-brian'},{key:'czs-telegram'},{key:'czs-text-l'},{key:'czs-thumbs-up'},{key:'czs-thumbs-up-l'},{key:'czs-ticket'},{key:'czs-ticket-l'},{key:'czs-time'},{key:'czs-time-l'},{key:'czs-tmall'},{key:'czs-transmission-l'},{key:'czs-transport'},{key:'czs-trash'},{key:'czs-trash-l'},{key:'czs-triangle'},{key:'czs-triangle-l'},{key:'czs-triangle-o'},{key:'czs-trophy'},{key:'czs-trophy-l'},{key:'czs-truck'},{key:'czs-truck-l'},{key:'czs-tv'},{key:'czs-tv-l'},{key:'czs-twitter'},{key:'czs-upload-l'},{key:'czs-usb'},{key:'czs-usb-l'},{key:'czs-user'},{key:'czs-user-l'},{key:'czs-v2ex'},{key:'czs-vector-design'},{key:'czs-video-camera'},{key:'czs-video-camera-l'},{key:'czs-video-file'},{key:'czs-video-file-l'},{key:'czs-vimeo'},{key:'czs-virtual'},{key:'czs-virtual-l'},{key:'czs-volume'},{key:'czs-volume-l'},{key:'czs-volume-x-l'},{key:'czs-wallet'},{key:'czs-wallet-l'},{key:'czs-warning'},{key:'czs-warning-l'},{key:'czs-watch'},{key:'czs-watch-l'},{key:'czs-webcam'},{key:'czs-webcam-l'},{key:'czs-web-edit'},{key:'czs-web-edit-l'},{key:'czs-weibo'},{key:'czs-weixin'},{key:'czs-weixinzhifu'},{key:'czs-wifi'},{key:'czs-wordpress'},{key:'czs-wrench'},{key:'czs-wrench-l'},{key:'czs-write-l'},{key:'czs-x-buy-l'},{key:'czs-youtube'},{key:'czs-zhihu'},{key:'czs-zip-folder'},{key:'czs-zip-folder-l'}]

    document.addEventListener('DOMContentLoaded', function() {
        const listsContainer = document.querySelector('.icon-lists')

        icons.forEach(icon => {
            const itemDiv = document.createElement('div')
            itemDiv.style = 'display:flex;align-items:center;justify-content:center;text-align:center;width:50px;height:50px;background-color:#fff;border-radius:8px;margin:0 12px 12px 0;box-shadow:0 0 0 0.5px rgba(188,195,206,0.1),0 2px 10px rgba(48,55,66,0.06);cursor:pointer;'

            const iconElement = document.createElement('i')
            iconElement.className = `${icon.key}`
            iconElement.style = 'font-size: 20px;'

            itemDiv.appendChild(iconElement)

            itemDiv.addEventListener('click', function () {
                navigator.clipboard
                    .writeText(icon.key)
                    .then(() => {
                        alert(`'${icon.key}' has been copied to clipboard`)
                    })
                    .catch(err => {
                        console.error('Failed to copy: ', err)
                    })
            })

            listsContainer.appendChild(itemDiv)
        })
    })
</script>

<?php
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
get_footer();
?>