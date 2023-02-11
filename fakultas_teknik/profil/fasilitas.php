<?php
require_once('header_vnb.php');
?>
<?php
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
				<div class='flex_cell av_one_full av-2oebmi-16df8bb64d1f8b55a75b6c011f72349d no_margin  avia-builder-el-1  avia-builder-el-no-sibling '><div class='flex_cell_inner'>
					<div class='av-special-heading av-1k0sgq-0d4ccb47108f9165a8ce649627431208 av-special-heading-h2 blockquote modern-quote  avia-builder-el-2  el_before_av_textblock  avia-builder-el-first '><h2 class='av-special-heading-tag' itemprop="headline">Fasilitas Kampus</h2><div class="special-heading-border"><div class="special-heading-inner-border"></div></div></div>
					<section class='av_textblock_section av-2d9pk2-a78830a51e71d37a23e50abfa831928f' itemscope="itemscope" itemtype="https://schema.org/CreativeWork"><div class='avia_textblock' itemprop="text"></div></section>
					<div class='hr av-29ruoy-02ecae3001971112c883a09e4326148c hr-custom  avia-builder-el-4  el_after_av_textblock  el_before_av_textblock  hr-left hr-icon-no'><span class='hr-inner inner-border-av-border-fat'><span class="hr-inner-style"></span></span></div>
					<section class='av_textblock_section av-1ctxsi-fee09486bd1dfbf4e052b4583763cf04' itemscope="itemscope" itemtype="https://schema.org/CreativeWork"><div class='avia_textblock' itemprop="text"><p><img decoding="async" class="aligncenter wp-image-4344 size-full" src="../assets/img/unamin.jpg" alt="Pelayanan FTI UII" width="1499" height="716" srcset="../assets/img/unamin.jpg 1499w, ../assets/img/unamin-300x143.jpg 300w, https://fit.uii.ac.id/wp-content/uploads/2016/05/Pelayanan-FTI-UII-768x367.jpg 768w, https://fit.uii.ac.id/wp-content/uploads/2016/05/Pelayanan-FTI-UII-1030x492.jpg 1030w, https://fit.uii.ac.id/wp-content/uploads/2016/05/Pelayanan-FTI-UII-705x337.jpg 705w, https://fit.uii.ac.id/wp-content/uploads/2016/05/Pelayanan-FTI-UII-450x215.jpg 450w" sizes="(max-width: 1499px) 100vw, 1499px" /></p>
					<h3><strong>FASILITAS PENDUKUNG DI UNIVERSITAS</strong></h3>
					<p>Universitas Muhammadiyah Sorong memiliki fasilitas pendukung yang dapat dimanfaatkan oleh mahasiswa, civitas akademika, alumni serta serta masyarakat umum. Klik tautan berikut untuk mendapatkan informasi lengkap tentang fasilitas pendukung di Kampus yang tersedia di bawah ini:</p>
					</div></section>
				
					<div class='hr av-1v672y-38f05a06c023bbd0c90a232184fd5b1a hr-default  avia-builder-el-7  el_after_av_textblock  el_before_av_textblock '><span class='hr-inner '><span class="hr-inner-style"></span></span></div>
					<section class='av_textblock_section av-1qeuve-31573ca1b03ca9f4c04f10facdcbc63f' itemscope="itemscope" itemtype="https://schema.org/CreativeWork"><div class='avia_textblock' itemprop="text"><h3><strong>FASILITAS PENDUKUNG DI FAKULTAS TEKNIK<br />
					</strong></h3>
					<p>Fakultas Teknik juga menyediakan berbagai fasilitas pendukung di lingkungan kampus dan dapat diakses oleh seluruh sivitas akademika.</p>
					</div></section>
					
					<div class='togglecontainer av-17n0mi-584a7add9ac5b620b8be287964010d74  avia-builder-el-9  el_after_av_textblock  avia-builder-el-last  toggle_close_all'>
					<?php
					include '../config/koneksi.php';
					$sql = mysqli_query($konek, "SELECT * FROM tb_fasilitas ");
					?>
					<?php
					$x = 1;
					$data = mysqli_fetch_array($sql);
					foreach ($sql as $data) {
						?>
						<section class='av_toggle_section av-1db2ay-b8386b1e2735b7bf486dc772cb85c583' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
							<div role="tablist" class="single_toggle" data-tags="{All} ">
								<p data-fake-id='#toggle-id-<?= $x ?>' class='toggler   ' itemprop="headline" role='tab' tabindex='0' aria-controls='toggle-id-1'>
									<?= $data['nama_fasilitas'] ?>
									<span class="toggle_icon">
										<span class="vert_icon"></span>
										<span class="hor_icon"></span>
									</span>
								</p>
								<div id='toggle-id-1' class='toggle_wrap  '>
									<div class='toggle_content invers-color ' itemprop="text">
										<?= $data['keterangan_fasilitas'] ?>
						</div></div></div></section>
						<?php

						$x++;

					}
					?>
					
					</div>
					</div></div>
				
			</div>
	</div>
</div>
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
