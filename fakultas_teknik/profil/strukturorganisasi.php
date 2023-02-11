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
                <div class='flex_cell av_one_full av-bq09a-c5ef4f8e011c5175e2c36285d49899fd no_margin  avia-builder-el-1  avia-builder-el-no-sibling '><div class='flex_cell_inner'>
                    <div class='av-special-heading av-2xxtxs-d57500ba0e52e1a34a2814ff0247be2e av-special-heading-h2 blockquote modern-quote  avia-builder-el-2  el_before_av_hr  avia-builder-el-first '><h2 class='av-special-heading-tag' itemprop="headline">Struktur Organisasi</h2>
						<div class="special-heading-border"><div class="special-heading-inner-border"></div></div></div>
                    <div class='hr av-2txubq-c2c66c2b9003df81229a4f78ef0a26c4 hr-custom  avia-builder-el-3  el_after_av_heading  el_before_av_one_full  hr-left hr-icon-no'><span class='hr-inner inner-border-av-border-fat'><span class="hr-inner-style"></span></span></div>
                    <div class='flex_column av-12qogm-aee1cc00c3643dd7f1a041a959ee7f00 av_one_full  avia-builder-el-4  el_after_av_hr  el_before_av_one_full  first flex_column_div av-zero-column-padding '>
						<section class='av_textblock_section av-k697k26q-4b6d7cfb94713fb3f6384bbfa09ad86e' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
							<div class='avia_textblock' itemprop="text">
	<?php
	include '../config/koneksi.php';
	$sql = mysqli_query($konek,"SELECT * FROM tb_struktur_organisasi");
	foreach ($sql as $s) {
		?>
								<p>
									<img decoding="async" class="alignnone  wp-image-13456" src=../assets/img/struktur_organisasi/<?=$s['gambar'] ?> alt="Struktur Organisasi Fakultas Teknologi IndustriU II" width="1712" height="793" />
								</p>
                    </div></section></div>
					<div class='flex_column av-26flsg-5ed931697cde946ef1cf8cccd4dedf43 av_one_full  avia-builder-el-6  el_after_av_one_full  el_before_av_one_half  first flex_column_div av-zero-column-padding column-top-margin'><section class='av_textblock_section av-l6bvnh2x-d8eec216abddae749016370c5d389f13' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class='avia_textblock' itemprop="text"><p><?= $s['keterangan_struktur']; ?></p>
    <?php } ?>               
            </div>
    </div>
</div>
				</div>
			</div>
	</div>
<!-- Konten Halaman Berhenti-->

<!-- Footer mulai-->
<?php require_once('footer_nb.php'); ?>
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
