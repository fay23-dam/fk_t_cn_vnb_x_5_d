<?php require_once('cvb/header_vnb.php'); ?>
<div class='header_bg'></div>
</header>
<!-- Navigasi Menu Berhenti-->

<!-- Konten Halaman mulai-->
<div id='main' class='all_colors' data-scroll-offset='108'>
    <div id='av-layout-grid-1' class='av-layout-grid-container av-3d5cqg-ce41156aa506f866f34f48a32def2a39 entry-content-wrapper main_color av-flex-cells  avia-builder-el-0  avia-builder-el-no-sibling   container_wrap fullsize'>
        <section>
            <div class="container">
                <!-- isi disini halaman kalian -->
				<link href="../assets/img/umsorong.jpg" rel="icon">
				<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
			  
				<!-- Google Fonts -->
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
			  
				<!-- Vendor CSS Files -->
				<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
				<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
				<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
				<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
				<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
			  
				<!-- Template Main CSS File -->
				<link href="../assets/css/style.css" rel="stylesheet">
<?php
include '../config/koneksi.php';
$sql = mysqli_query($konek,"SELECT * FROM tb_produk_riset");
?>
<?php
foreach($sql as $s){
	?>
				<section id="contact" class="contact section-bg">
					<div class="container">
					  <div class="section-title">
						<h2>Produk Riset</h2>
					<?= $s['isi']?>
					  </div>
					  </section>
<?php
}
?>
                
            </div>
        </section>
    </div>
</div>
<!-- Konten Halaman Berhenti-->

<!-- Footer mulai-->
<?php require_once('cvb/footer_vnb.php'); ?>
<!-- Footer berhenti-->

</div>
</div>
<a href='#top' title='Scroll to top' id='scroll-top-link' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'><span class="avia_hidden_link_text">Scroll to top</span></a>
<div id="fb-root"></div>

<script type="text/javascript">
var sbiajaxurl = "https://fit.uii.ac.id/wp-admin/admin-ajax.php";
</script>
<script type='text/javascript'>
 /* <![CDATA[ */  
var avia_framework_globals = avia_framework_globals || {};
    avia_framework_globals.frameworkUrl = 'https://fit.uii.ac.id/wp-content/themes/enfold/framework/';
    avia_framework_globals.installedAt = 'https://fit.uii.ac.id/wp-content/themes/enfold/';
    avia_framework_globals.ajaxurl = 'https://fit.uii.ac.id/wp-admin/admin-ajax.php';
/* ]]> */ 
</script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/avia.js?ver=4.9' id='avia-default-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/shortcodes.js?ver=4.9' id='avia-shortcodes-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/audio-player/audio-player.js?ver=6.1.1' id='avia-module-audioplayer-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/contact/contact.js?ver=6.1.1' id='avia-module-contact-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/slideshow/slideshow.js?ver=6.1.1' id='avia-module-slideshow-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/countdown/countdown.js?ver=6.1.1' id='avia-module-countdown-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/gallery/gallery.js?ver=6.1.1' id='avia-module-gallery-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/gallery_horizontal/gallery_horizontal.js?ver=6.1.1' id='avia-module-gallery-hor-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/headline_rotator/headline_rotator.js?ver=6.1.1' id='avia-module-rotator-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/icongrid/icongrid.js?ver=6.1.1' id='avia-module-icongrid-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/iconlist/iconlist.js?ver=6.1.1' id='avia-module-iconlist-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/image_hotspots/image_hotspots.js?ver=6.1.1' id='avia-module-hotspot-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/magazine/magazine.js?ver=6.1.1' id='avia-module-magazine-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/portfolio/isotope.js?ver=6.1.1' id='avia-module-isotope-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/masonry_entries/masonry_entries.js?ver=6.1.1' id='avia-module-masonry-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/menu/menu.js?ver=6.1.1' id='avia-module-menu-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/notification/notification.js?ver=6.1.1' id='avia-module-notification-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/numbers/numbers.js?ver=6.1.1' id='avia-module-numbers-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/portfolio/portfolio.js?ver=6.1.1' id='avia-module-portfolio-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/progressbar/progressbar.js?ver=6.1.1' id='avia-module-progress-bar-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/slideshow/slideshow-video.js?ver=6.1.1' id='avia-module-slideshow-video-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/slideshow_accordion/slideshow_accordion.js?ver=6.1.1' id='avia-module-slideshow-accordion-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/slideshow_fullscreen/slideshow_fullscreen.js?ver=6.1.1' id='avia-module-slideshow-fullscreen-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/slideshow_layerslider/slideshow_layerslider.js?ver=6.1.1' id='avia-module-slideshow-ls-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/tab_section/tab_section.js?ver=6.1.1' id='avia-module-tabsection-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/tabs/tabs.js?ver=6.1.1' id='avia-module-tabs-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/testimonials/testimonials.js?ver=6.1.1' id='avia-module-testimonials-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/timeline/timeline.js?ver=6.1.1' id='avia-module-timeline-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/toggles/toggles.js?ver=6.1.1' id='avia-module-toggles-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/video/video.js?ver=6.1.1' id='avia-module-video-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/avia-snippet-hamburger-menu.js?ver=4.9' id='avia-hamburger-menu-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/aviapopup/jquery.magnific-popup.min.js?ver=4.9' id='avia-popup-js-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/avia-snippet-lightbox.js?ver=4.9' id='avia-lightbox-activation-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/avia-snippet-megamenu.js?ver=4.9' id='avia-megamenu-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/avia-snippet-sticky-header.js?ver=4.9' id='avia-sticky-header-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/avia-snippet-footer-effects.js?ver=4.9' id='avia-footer-effects-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/js/avia-snippet-widget.js?ver=4.9' id='avia-widget-js-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-gutenberg/js/avia_blocks_front.js?ver=4.9' id='avia_blocks_front_script-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/framework/js/conditional_load/avia_google_maps_front.js?ver=4.9' id='avia_google_maps_front_script-js'></script>
</body>
</html>
