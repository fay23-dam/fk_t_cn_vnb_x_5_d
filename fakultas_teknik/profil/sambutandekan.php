<?php
require_once('header_vnb.php');

require_once('navi_vnb.php');
?>
<div class='header_bg'></div>

</header>

<!-- Navigasi Menu Berhenti-->

<!-- Konten Halaman mulai-->
<div id='main' class='all_colors' data-scroll-offset='108'>
    <div id='av-layout-grid-1' class='av-layout-grid-container av-3d5cqg-ce41156aa506f866f34f48a32def2a39 entry-content-wrapper main_color av-flex-cells  avia-builder-el-0  avia-builder-el-no-sibling   container_wrap fullsize'>
            <div class="container">
                <!-- isi disini halaman kalian -->
<div class='stretch_full container_wrap alternate_color light_bg_color empty_title  title_container'><div class='container'><div class="breadcrumb breadcrumbs avia-breadcrumbs"><div class="breadcrumb-trail"><span class="trail-before"><span class="breadcrumb-title">You are here:</span></span> <span itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList"><span itemscope="itemscope" itemtype="https://schema.org/ListItem" itemprop="itemListElement"><a itemprop="url" href="https://fit.uii.ac.id" title="Fakultas Teknologi Industri - Universitas Islam Indonesia" rel="home" class="trail-begin"><span itemprop="name">Home</span></a><span itemprop="position" class="hidden">1</span></span></span> <span class="sep">/</span> <span class="trail-end">Sambutan Dekan</span></div></div></div></div><div id='av-layout-grid-1' class='av-layout-grid-container av-62cny-bb8f9ca232db84a9f7f2a94a1af4ada7 entry-content-wrapper main_color av-flex-cells  avia-builder-el-0  el_before_av_layout_row  avia-builder-el-first   container_wrap fullsize'>
<div class='flex_cell av_one_full av-1jxnu6-46f1ce4301263d697f3ef519cea68c7e no_margin  avia-builder-el-1  avia-builder-el-no-sibling '><div class='flex_cell_inner'>
<div class='av-special-heading av-1ge5k6-5bf6cabdb839b9d4d3b2ffca35f8ab96 av-special-heading-h2 blockquote modern-quote  avia-builder-el-2  el_before_av_hr  avia-builder-el-first '><h2 class='av-special-heading-tag' itemprop="headline">Selamat Datang di Fakultas Teknik Universitas Muhammadiyah Sorong<h2><div class="special-heading-border"><div class="special-heading-inner-border"></div></div></div>
<div class='hr av-18rb9q-f360814d24f0cd5950e1cd0685a8301c hr-custom  avia-builder-el-3  el_after_av_heading  avia-builder-el-last  hr-left hr-icon-no'><span class='hr-inner inner-border-av-border-fat'><span class="hr-inner-style"></span></span></div>
</div></div>
</div>
<?php
include '../config/koneksi.php';
$sql = mysqli_query($konek, "SELECT * FROM tb_sambutan_dekan");	
?>

<?php
foreach($sql as $s){
?>
<div id='av-layout-grid-2' class='av-layout-grid-container av-11t20e-e0161b22991c4f63121dfabea02648a0 entry-content-wrapper main_color av-flex-cells  avia-builder-el-4  el_after_av_layout_row  avia-builder-el-last  grid-row-not-first  container_wrap fullsize'>
<div class='flex_cell av_one_half av-xxdgm-81768e70a66a8588adcc098b14290596 no_margin  avia-builder-el-5  el_before_av_cell_one_half  avia-builder-el-first '>
	<div class='flex_cell_inner'>
		<div class='avia-image-container av-ojesm-2f92852c7d398c0699acb4667074bde4 av-styling- avia-align-center  avia-builder-el-6  el_before_av_textblock  avia-builder-el-first ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
			<div class="avia-image-container-inner">
				<div class="avia-image-overlay-wrap">
					<img class='wp-image-5601 avia-img-lazy-loading-not-5601 avia_image' src='../assets/img/sambutan_dekan/<?=$s['gambar']?>' alt='' title='Dekan FTI_ Hari Purnomo, Prof., Dr., Ir., M.T.' height="350" width="350" itemprop="thumbnailUrl" />
				</div>
			</div>
		</div>
<section class='av_textblock_section av-jiwc6-2bcace11fb7240889d1dca2da65f4a2e' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div class='avia_textblock' itemprop="text">
		<div style="text-align: center;">
		<strong>Dekan</strong>
	</div>
<div style="text-align: center;">
	<strong><?=$s['nama']?></strong>
</div>
</div>
</section>
</div>
</div>
<div class='flex_cell av_one_half av-desq6-ce2ae091d79f1d8323c98833f4d18f39 no_margin  avia-builder-el-8  el_after_av_cell_one_half  avia-builder-el-last '>
	<div class='flex_cell_inner'>
<section class='av_textblock_section av-8lfzi-b5f5350dd04c2a81f4e85497d07af95d' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div class='avia_textblock' itemprop="text">
		<p style="text-align: left;"><em>Assalamu&#8217;alaikum wr. wb</em></p>
<?=$s['kata_dekan']?>
<div></div>
<p>Semoga website resmi ini dapat membantu memberikan informasi yang selengkapnya tentang Universitas Muhammadiyah Sorong.  Terimakasih atas perhatian dan kunjungan Anda.</p>
<div style="text-align: left;"><em>Wassalamu&#8217;alaikum wr. wb.</em></div>
<div style="text-align: center;"></div>
<div style="text-align: center;"></div>
<div style="text-align: center;"></div>
</div>
</section>
</div>
</div></div>
            </div>
    </div>
</div>
<?php
}	
?>
<!-- Konten Halaman Berhenti-->

<!-- Footer mulai-->
<?php
require_once('footer_nb.php');
?>
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
