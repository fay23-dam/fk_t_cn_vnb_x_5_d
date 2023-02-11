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
                <div class='stretch_full container_wrap alternate_color light_bg_color empty_title  title_container'>
					
						<div class="breadcrumb breadcrumbs avia-breadcrumbs">
							<div class="breadcrumb-trail">
								<span class="trail-before">
									<span class="breadcrumb-title">You are here:</span>
								</span>
								<span itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
									<span itemscope="itemscope" itemtype="https://schema.org/ListItem" itemprop="itemListElement">
										<a itemprop="url" href="../index.html" title="Fakultas Teknologi Industri - Universitas Islam Indonesia" rel="home" class="trail-begin">
											<span itemprop="name">Home</span>
										</a>
										<span itemprop="position" class="hidden">1</span>
									</span>
								</span> 
								<span class="sep">/</span>
								<span class="trail-end">Pimpinan Fakultas</span>
							</div>
						</div>
					</div>
				</div>
				<div id='av-layout-grid-1' class='av-layout-grid-container av-1e9pijy-5a55efed33319d75e25c717bc67c9a51 entry-content-wrapper main_color av-flex-cells  avia-builder-el-0  avia-builder-el-no-sibling   container_wrap fullsize'>
                    <div class='flex_cell av_one_full av-1cf2oj2-891b7ae1e0dcdcedb1681d02a02aa68b no_margin  avia-builder-el-1  avia-builder-el-no-sibling '>
						<div class='flex_cell_inner'>
                    <div class='av-special-heading av-1y4k3i-a4a75ff705f68d96b94613e6226c8529 av-special-heading-h2 blockquote modern-quote  avia-builder-el-2  el_before_av_hr  avia-builder-el-first '>
						<h2 class='av-special-heading-tag' itemprop="headline">Pimpinan Fakultas</h2>
						<div class="special-heading-border"><div class="special-heading-inner-border">
					</div>
				</div>
			</div>
                    <div class='hr av-4lypce-87bf570f17318e0e1bb34a8c8d16791b hr-custom  avia-builder-el-3  el_after_av_heading  el_before_av_one_fifth  hr-left hr-icon-no'>
						<span class='hr-inner inner-border-av-border-fat'>
							<span class="hr-inner-style"></span>
						</span>
					</div>
                    <div class='flex_column av-17l4gpq-e7b736c90c1fa2481bb66ee3efbd0ff2 av_one_fifth  avia-builder-el-4  el_after_av_hr  el_before_av_three_fifth  first flex_column_div av-zero-column-padding '>

					</div>
					<div class='flex_column av-16lgtam-5f524802cd809f47052e7bc3daba2240 av_three_fifth  avia-builder-el-5  el_after_av_one_fifth  el_before_av_one_fifth  flex_column_div av-zero-column-padding '>
						<div class='avia-image-container av-14ideri-4797ac22b038a8a02e8132dc5fb3c649 av-styling- avia-align-center  avia-builder-el-6  el_before_av_textblock  avia-builder-el-first ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
							<div class="avia-image-container-inner">
								<div class="avia-image-overlay-wrap">
									<?php
									include '../config/koneksi.php';
				$sql = mysqli_query($konek, "SELECT * FROM tb_pimpinan WHERE jabatan='DEKAN'");
				foreach ($sql as $s) {
					?>
									<img class='wp-image-13965 avia-img-lazy-loading-not-13965 avia_image' src='../assets/img/pimpinan/<?= $s['gambar'];?>' alt='Dekan FTI - Prof. Dr. Ir. Hari Purnomo, M.T., IPU.' title='Dekan FTI - Prof Hari Purnomo' height="300" width="300" itemprop="thumbnailUrl" />
								</div>
							</div>
						</div>
                    <section class='av_textblock_section av-13lms7i-1e766e53aff95ae0ef04d124cafce882' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class='avia_textblock' itemprop="text">
							<div style="text-align: center;">
								<strong><?= $s['jabatan']; ?></strong>
							</div>
                    <div style="text-align: center;">
						<strong><?= $s['nama']; ?>, <?=$s['gelar'] ?></strong>
					</div>
                    <p style="text-align: center;"><?= $s['nama']; ?> adalah dosen tetap di Program Studi Teknik. Saat ini ia menjabat sebagai Dekan Fakultas Teknik Universitas Muhammadiyah Sorong.</p>
                    </div>
				</section>
				<?php
				}
				?>
				
			</div>
			<div class='flex_column av-11td966-fc19a713246551b03348809844abd739 av_one_fifth  avia-builder-el-8  el_after_av_three_fifth  el_before_av_one_half  flex_column_div av-zero-column-padding '>

			</div>
			<?php
							$sql = mysqli_query($konek, "SELECT * FROM tb_pimpinan WHERE jabatan='WAKIL DEKAN'");
							foreach($sql as $s){
							?>
			<div class='flex_column av-z8rpge-281dfe378d10567d724e75528065c87c av_one_half  avia-builder-el-9  el_after_av_one_fifth  el_before_av_one_half  first flex_column_div av-zero-column-padding column-top-margin'>
				<div class='avia-image-container av-xednse-2c79c0bbb94ee9a1703803aae10ae67b av-styling- avia-align-center  avia-builder-el-10  el_before_av_textblock  avia-builder-el-first ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
					<div class="avia-image-container-inner">
						<div class="avia-image-overlay-wrap">
							<img class='wp-image-13966 avia-img-lazy-loading-not-13966 avia_image' src='../assets/img/pimpinan/<?= $s['gambar'];?>' alt='Wakil Dekan Bidang Sumber Daya FTI - Ahmad Munasir Raf&#039;ie Pratama, Ph.D' title='Wadek Sumber Daya FTI - Ahmad Munasir Rafie Pratama, Ph.D' height="300" width="300" itemprop="thumbnailUrl" />
				</div>
			</div>
		</div>
                    <section class='av_textblock_section av-wjq1um-c9fcb402e2fd4660e27325b6ac862865' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class='avia_textblock' itemprop="text">
							<div style="text-align: center;">
				    <strong><?=$s['jabatan'] ?></strong>
							</div>
                    <div style="text-align: center;">
						<strong><?= $s['nama']; ?>, <?= $s['gelar']; ?><br/></strong>
					</div>
                    <p style="text-align: center;"><?= $s['nama']; ?> </p>
                    </div>
				</section>
				<?php
							}	
				?>
			</div>
			<?php
				$xcv = mysqli_query($konek, "SELECT * FROM tb_pimpinan WHERE jabatan = 'BENDAHARA' ");
				foreach($xcv as $x){
				?>
			<div class='flex_column av-udirji-38a94c6e2eaac75c608a633989ff179c av_one_half  avia-builder-el-12  el_after_av_one_half  el_before_av_one_half  flex_column_div av-zero-column-padding column-top-margin'>
				<div class='avia-image-container av-sh725q-8075ee24c7e71b42077e6b1f2d3c125e av-styling- avia-align-center  avia-builder-el-13  el_before_av_textblock  avia-builder-el-first ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
					<div class="avia-image-container-inner">
						<div class="avia-image-overlay-wrap">
							<img class='wp-image-13967 avia-img-lazy-loading-not-13967 avia_image' src='../assets/img/pimpinan/<?= $x['gambar'];?>' alt='' title='Wadek KKA FTI - Dr. Arif Hidayat' height="300" width="300" itemprop="thumbnailUrl" />
						</div>
					</div>
				</div>
				
                    <section class='av_textblock_section av-rjt2jy-c2ffeb207ac2fce788379c43d7ef6d73' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class='avia_textblock' itemprop="text">
							<div style="text-align: center;">
								<strong><?=$x['jabatan'] ?></strong>
							</div>
                    <div style="text-align: center;">
						<strong><?=$x['nama'] ?>,<?=$x['gelar'] ?></strong>
					</div>
                    <p style="text-align: center;"><?=$x['nama'] ?> </p>
                    </div>
				</section>
			</div>
			<?php
				}
			?>
			<?php
							$sql = mysqli_query($konek, "SELECT * FROM tb_ketua WHERE jabatan='KETUA SIPIL'");
							foreach($sql as $s){
							?>
			<div class='flex_column av-z8rpge-281dfe378d10567d724e75528065c87c av_one_half  avia-builder-el-9  el_after_av_one_fifth  el_before_av_one_half  first flex_column_div av-zero-column-padding column-top-margin'>
				<div class='avia-image-container av-xednse-2c79c0bbb94ee9a1703803aae10ae67b av-styling- avia-align-center  avia-builder-el-10  el_before_av_textblock  avia-builder-el-first ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
					<div class="avia-image-container-inner">
						<div class="avia-image-overlay-wrap">
							<img class='wp-image-13966 avia-img-lazy-loading-not-13966 avia_image' src='../assets/img/pimpinan/<?= $s['gambar'];?>' alt='Wakil Dekan Bidang Sumber Daya FTI - Ahmad Munasir Raf&#039;ie Pratama, Ph.D' title='Wadek Sumber Daya FTI - Ahmad Munasir Rafie Pratama, Ph.D' height="300" width="300" itemprop="thumbnailUrl" />
				</div>
			</div>
		</div>
                    <section class='av_textblock_section av-wjq1um-c9fcb402e2fd4660e27325b6ac862865' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class='avia_textblock' itemprop="text">
							<div style="text-align: center;">
				    <strong><?=$s['jabatan'] ?></strong>
							</div>
                    <div style="text-align: center;">
						<strong><?= $s['nama']; ?>, <?= $s['gelar']; ?><br/></strong>
					</div>
                    <p style="text-align: center;"><?= $s['nama']; ?> </p>
                    </div>
				</section>
				<?php
							}	
				?>
			</div>
			<?php
				$xcv = mysqli_query($konek, "SELECT * FROM tb_ketua WHERE jabatan = 'KETUA INDUSTRI' ");
				foreach($xcv as $x){
				?>
			<div class='flex_column av-udirji-38a94c6e2eaac75c608a633989ff179c av_one_half  avia-builder-el-12  el_after_av_one_half  el_before_av_one_half  flex_column_div av-zero-column-padding column-top-margin'>
				<div class='avia-image-container av-sh725q-8075ee24c7e71b42077e6b1f2d3c125e av-styling- avia-align-center  avia-builder-el-13  el_before_av_textblock  avia-builder-el-first ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
					<div class="avia-image-container-inner">
						<div class="avia-image-overlay-wrap">
							<img class='wp-image-13967 avia-img-lazy-loading-not-13967 avia_image' src='../assets/img/pimpinan/<?= $x['gambar'];?>' alt='' title='Wadek KKA FTI - Dr. Arif Hidayat' height="300" width="300" itemprop="thumbnailUrl" />
						</div>
					</div>
				</div>
				
                    <section class='av_textblock_section av-rjt2jy-c2ffeb207ac2fce788379c43d7ef6d73' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class='avia_textblock' itemprop="text">
							<div style="text-align: center;">
								<strong><?=$x['jabatan'] ?></strong>
							</div>
                    <div style="text-align: center;">
						<strong><?=$x['nama'] ?>,<?=$x['gelar'] ?></strong>
					</div>
                    <p style="text-align: center;"><?=$x['nama'] ?> </p>
                    </div>
				</section>
			</div>
			<?php
				}
			?>
			<?php
							$sql = mysqli_query($konek, "SELECT * FROM tb_ketua WHERE jabatan='KETUA INFORMATIKA'");
							foreach($sql as $s){
							?>
			<div class='flex_column av-z8rpge-281dfe378d10567d724e75528065c87c av_one_half  avia-builder-el-9  el_after_av_one_fifth  el_before_av_one_half  first flex_column_div av-zero-column-padding column-top-margin'>
				<div class='avia-image-container av-xednse-2c79c0bbb94ee9a1703803aae10ae67b av-styling- avia-align-center  avia-builder-el-10  el_before_av_textblock  avia-builder-el-first ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
					<div class="avia-image-container-inner">
						<div class="avia-image-overlay-wrap">
							<img class='wp-image-13966 avia-img-lazy-loading-not-13966 avia_image' src='../assets/img/pimpinan/<?= $s['gambar'];?>' alt='Wakil Dekan Bidang Sumber Daya FTI - Ahmad Munasir Raf&#039;ie Pratama, Ph.D' title='Wadek Sumber Daya FTI - Ahmad Munasir Rafie Pratama, Ph.D' height="300" width="300" itemprop="thumbnailUrl" />
				</div>
			</div>
		</div>
                    <section class='av_textblock_section av-wjq1um-c9fcb402e2fd4660e27325b6ac862865' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class='avia_textblock' itemprop="text">
							<div style="text-align: center;">
				    <strong><?=$s['jabatan'] ?></strong>
							</div>
                    <div style="text-align: center;">
						<strong><?= $s['nama']; ?>, <?= $s['gelar']; ?><br/></strong>
					</div>
                    <p style="text-align: center;"><?= $s['nama']; ?> </p>
                    </div>
				</section>
				<?php
							}	
				?>
			</div>
			<?php
				$xcv = mysqli_query($konek, "SELECT * FROM tb_ketua WHERE jabatan = 'KETUA LINGKUNGAN' ");
				foreach($xcv as $x){
				?>
			<div class='flex_column av-udirji-38a94c6e2eaac75c608a633989ff179c av_one_half  avia-builder-el-12  el_after_av_one_half  el_before_av_one_half  flex_column_div av-zero-column-padding column-top-margin'>
				<div class='avia-image-container av-sh725q-8075ee24c7e71b42077e6b1f2d3c125e av-styling- avia-align-center  avia-builder-el-13  el_before_av_textblock  avia-builder-el-first ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
					<div class="avia-image-container-inner">
						<div class="avia-image-overlay-wrap">
							<img class='wp-image-13967 avia-img-lazy-loading-not-13967 avia_image' src='../assets/img/pimpinan/<?= $x['gambar'];?>' alt='' title='Wadek KKA FTI - Dr. Arif Hidayat' height="300" width="300" itemprop="thumbnailUrl" />
						</div>
					</div>
				</div>
				
                    <section class='av_textblock_section av-rjt2jy-c2ffeb207ac2fce788379c43d7ef6d73' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class='avia_textblock' itemprop="text">
							<div style="text-align: center;">
								<strong><?=$x['jabatan'] ?></strong>
							</div>
                    <div style="text-align: center;">
						<strong><?=$x['nama'] ?>,<?=$x['gelar'] ?></strong>
					</div>
                    <p style="text-align: center;"><?=$x['nama'] ?> </p>
                    </div>
				</section>
			</div>
			<?php
				}
			?>
			    
            </div>
    </div>
</div>
<!-- Konten Halaman Berhenti-->
</div>
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
