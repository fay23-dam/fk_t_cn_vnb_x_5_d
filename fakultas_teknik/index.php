<?php
include 'config/koneksi.php';
?>
<?php
$ip = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$tanggal = date("Ymd");
$waktu = time();
$bln=date("m");
$tgl=date("d");
$blan=date("Y-m");
$thn=date("Y");
$tglk=$tgl-1;
$s = mysqli_query($konek,"SELECT * FROM tb_visit WHERE ip='$ip' AND tanggal='$tanggal'");

if(mysqli_num_rows($s) == 0)
{
   mysqli_query($konek,"INSERT INTO tb_visit(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
}
else
{
 mysqli_query($konek,"UPDATE tb_visit SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");

	if($tglk=='1' | $tglk=='2' | $tglk=='3' | $tglk=='4' | $tglk=='5' | $tglk=='6' | $tglk=='7' | $tglk=='8' | $tglk=='9'){
	   $kemarin=mysqli_query($konek,"SELECT * FROM tb_visit WHERE tanggal='$thn-$bln-0$tglk'");
	} else {
	   $kemarin=mysqli_query($konek,"SELECT * FROM tb_visit WHERE tanggal='$thn-$bln-$tglk'");
	}

	$bulan=mysqli_query($konek,"SELECT * FROM tb_visit WHERE tanggal LIKE '%$blan%'");
	$bulan1=mysqli_num_rows($bulan);
	$tahunini=mysqli_query($konek,"SELECT * FROM tb_visit WHERE tanggal LIKE '%$thn%'");
	$tahunini1=mysqli_num_rows($tahunini);
	$pengunjung = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tb_visit WHERE tanggal='$tanggal' GROUP BY ip"));
	$totalpengunjung = mysqli_fetch_array(mysqli_query($konek,"SELECT COUNT(hits) FROM tb_visit"));
	$hits = mysqli_fetch_assoc(mysqli_query($konek,"SELECT SUM(hits) as hitstoday FROM tb_visit WHERE tanggal='$tanggal' GROUP BY tanggal"));
	$totalhits1 =mysqli_query($konek,"SELECT SUM(hits) FROM tb_visit");
	$test=mysqli_fetch_array($totalhits1);
	$totalhits=$test[0];
	$bataswaktu = time() - 900;
	$pengunjungonline = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tb_visit WHERE online > '$bataswaktu'"));
	$kemarin1 = mysqli_num_rows($kemarin);
 }
?>
<?php
require_once('header.php');
?>

<body data-rsssl=1 id="top" class="home page-template-default page page-id-10138 stretched no_sidebar_border rtl_columns av-curtain-numeric open_sans " itemscope="itemscope" itemtype="https://schema.org/WebPage">

<div id='wrap_all'>
<header id='header' class='all_colors header_color dark_bg_color  av_header_top av_logo_left av_main_nav_header av_menu_right av_custom av_header_sticky av_header_shrinking_disabled av_header_stretch av_mobile_menu_tablet av_header_transparency av_header_searchicon av_header_unstick_top av_minimal_header av_bottom_nav_disabled  av_header_border_disabled' role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
<?php
require_once('navi.php');
?>
<div class='header_bg'></div>

</header>
<div id='main' class='all_colors' data-scroll-offset='108'>
<div >

	<div id="layerslider_10_do1vhbwf40yz"  style="width:1280px;height:680px;margin:0 auto;margin-bottom: 0px;">
		<div class="ls-slide" data-ls="bgcolor:#ffffff;duration:3000;transition2d:1;transition3d:1;transitionduration:1000;kenburnsscale:1.2;">
		
			<img width="2102" height="1245" src="assets/img/unamin.jpg" class="ls-bg" alt="" decoding="async" />
			<img width="1280" height="680" src="#" class="ls-tn" alt="" decoding="async" />
			<p style="top:377px;left:44px;text-align:left;font-weight:900;font-style:normal;text-decoration:none;background-size:inherit;background-position:inherit;font-size:70px;color:#ffffff;padding-right:400px;line-height:76px;font-family:Oswald;white-space:normal;" class="ls-l ls-text-layer" data-ls="durationout:500;position:relative;">Faculty of Engineering</p>
			<a  class="ls-l" href="#" target="_self" data-ls="position:relative;"><span style="top:554px;left:49px;font-weight:700;background-size:inherit;background-position:inherit;padding-top:15px;padding-right:35px;padding-bottom:15px;padding-left:35px;font-family:Arial, sans-serif;font-size:15px;color:#06337b;border-radius:0px;background-color:#ffe600;line-height:17px;" class="ls-button-layer">See Programs</span></a>
			<h3 style="top:335px;left:44px;background-size:inherit;background-position:inherit;font-size:39px;line-height:42px;color:#ffffff;" class="ls-l ls-text-layer" data-ls="durationout:500;position:relative;">Welcome to</h3>
			
		</div>
		<?php
		include 'config/koneksi.php';
		?>
<?php
$sql = mysqli_query($konek, "SELECT gambar FROM tb_slide");
while ($data = $sql->fetch_assoc()) {
	echo "<div class='ls-slide' data-ls='bgsize:100% 100%;bgposition:50% 50%;bgcolor:#ffffff;duration:6000;transition2d:1;transitionduration:1000;kenburnsscale:1.2;'>";
	echo "<img width='2104' height='1248' class='ls-bg'  src='assets/img/slide/".$data['gambar'] . "'/>";
	echo "<a href='#' target='_self' class='ls-link ls-link-on-top' rel='noopener'></a>";
	echo "</div>";
}
?>
		<div class="ls-slide" data-ls="bgsize:100% 100%;bgposition:50% 50%;bgcolor:#ffffff;duration:6000;transition2d:1;transitionduration:1000;kenburnsscale:1.2;">
			<img width="2104" height="1248" src="assets/img/slide 2 baru.png" class="ls-bg" alt="Web Banner Penerimaan Mahasiswa Baru FTI UII" decoding="async" />
			<img width="2104" height="1248" src="https://fit.uii.ac.id/wp-content/uploads/2022/04/SLIDER-WEB-UII-PMB-3.png" class="ls-tn" alt="Web Banner Penerimaan Mahasiswa Baru FTI UII" decoding="async" />
			<a href="#" target="_self" class="ls-link ls-link-on-top" rel="noopener"></a>
		</div>
	</div>
</div>

<div id='av-layout-grid-3' class='av-layout-grid-container av-84mvvc-6aa50ba0e9ccf25e94bed6252892dbcf entry-content-wrapper main_color av-flex-cells  avia-builder-el-23  el_after_av_layout_row  el_before_av_layout_row  grid-row-not-first  container_wrap fullsize'>
<div class='flex_cell av_one_full av-281mjns-d60f88cbaf9523f7d308563f706b5c26 no_margin  avia-builder-el-24  avia-builder-el-no-sibling '>
	<div class='flex_cell_inner'>
<section class='av_textblock_section av-276r088-e0a2f243da7253ca7ba3144abd2ca9f2' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div class='avia_textblock' itemprop="text">
		<p style="text-align: center;">
		<span style="font-size: 44px; color: #06337b; margin-top: 15px; line-height: 48px; text-align: center;">
		<b>Berita Pilihan</b>
	</span>
</p>
<p style="margin-top: 0px; text-align: center;">Tetap terhubung dengan berita dan informasi terbaru tentang berbagai aktivitas di Fakultas Teknik Universitas Muhammadiyah Sorong</p>
</div></section>
<div class='av-special-heading av-to608q-c14b39712d4308df9441b6f094233882 av-special-heading-h4 custom-color-heading  avia-builder-el-26  el_after_av_textblock  el_before_av_codeblock '>
	<h4 class='av-special-heading-tag' itemprop="headline">Berita</h4>
	<div class="special-heading-border">
		<div class="special-heading-inner-border">
		</div>
	</div>
</div>
<section class="avia_codeblock_section  avia_code_block_3" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div class='avia_codeblock ' itemprop="text">
		<div class="bdpp-post-grid-wrap bdpp-post-data-wrap bdpp-design-12 bdpp-grid-3  bdpp-clearfix" id="bdpp-post-grid-1">
			
	
		<div class="bdpp-post-grid-inr-wrap bdpp-post-data-inr-wrap bdpp-clearfix">
			
<?php
include 'config/koneksi.php';

$x = mysqli_query($konek, "SELECT * FROM tb_berita");
foreach ($x as $s) {
	?>
	<div class="bdpp-post-grid bdpp-col-3 bdpp-columns bdpp-post-14063 bdpp-post-standard bdpp-has-thumb">

<div class="bdpp-post-grid-content">
<div class="bdpp-post-img-bg" style="background-image:url(assets/img/berita/<?=$s['gambar'] ?>)">
<div class="bdpp-post-overlay">
<h5 class="bdpp-post-title">
<a href="berita/tamplateberita.php?id=<?=$s['id'] ?>" target="_self" ><?=$s['judul'] ?></a>
</h5>
<div class="bdpp-post-meta bdpp-post-meta-up">
<span class="bdpp-post-meta-data bdpp-post-date"><i class="fa fa-clock-o"></i><?=$s['tanggal'] ?></span> </div>
</div>
</div>
<div class="bdpp-post-content">
<div class="bdpp-post-desc"><?=$s['submenu'] ?></div>

</div>
</div>
</div>
<?php
}
?>

</form></div></div></section>

<div  class='av-layout-grid-container av-84mvvc-c1bd7ef8dc28614855e8f19e19fa0817 entry-content-wrapper main_color av-flex-cells  avia-builder-el-32  el_after_av_layout_row  el_before_av_layout_row  av-cell-min-height av-cell-min-height-80 grid-row-not-first  container_wrap fullsize' data-av_minimum_height_pc='80'>
<div class='flex_cell av_one_full av-281mjns-25432f1b042d592f5bd27b6cb080e0b5 no_margin  avia-builder-el-33  avia-builder-el-no-sibling  avia-full-stretch'>
	<div class='flex_cell_inner'>
<div class='hr av-kp27826z-15c70527de6c1a31f0f3f88122bb3f70 hr-invisible  avia-builder-el-34  el_before_av_textblock  avia-builder-el-first '><span class='hr-inner '><span class="hr-inner-style"></span></span></div>
<section class='av_textblock_section av-276r088-3c6b4d3f600a4830cf078a700b7db5ee' itemscope="itemscope" itemtype="https://schema.org/CreativeWork"><div class='avia_textblock av_inherit_color' itemprop="text"><p style="text-align: center;"><span style="font-size: 34px; color: #ffffff; margin-top: 15px; line-height: 38px; text-align: center;"><b>Testimoni Alumni</b></span></p>
<p style="margin-top: 0px; text-align: center;">
</div></section>
<div class='avia-testimonial-wrapper av-1qqq7fc-5a1aa8557065fa64e2b09a5d80f6a526 avia-slider-testimonials avia-slider-1-testimonials avia_animate_when_almost_visible av-large-testimonial-slider' data-autoplay='1' data-interval='10' data-animation='fade' data-hoverpause='1'>

<section class="avia-testimonial-row">
<?php
$vnm = mysqli_query($konek, "SELECT * FROM tb_testi");

$no = 1;

while ($no <= mysqli_num_rows($vnm)) {
	$v = mysqli_fetch_assoc($vnm);
	?>

	<div class='avia-testimonial av-v09tx6-8181cc42b23856e6a7b5c3bd0de3c26a avia-testimonial-row-1 avia-first-testimonial flex_column no_margin av_one_full'>
	
		<div class='avia-testimonial_inner' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
			<div class='avia-testimonial-content av_inherit_color'>
				<div class='slideshow-arrows'>
		<a href='#prev' class='prev-slide' class="vini"  tabindex='-1'> 
	<img class="vinim" src="assets/img/icons/rw.png" style="margin-left:95%; margin-bottom: -9%; width:30px; height: 30px;"/></a>
		<a href='#next' class='next-slide 'tabindex='-1' >
	<img  src="assets/img/icons/rw.png" style=" margin-right:100%; margin-bottom:-3%; width:30px; height: 30px; " /></a>
	</div>
				<div class='avia-testimonial-markup-entry-content' itemprop="text">
<?= $v['keterangan'] ?>

	
				</div>
			</div>
		<div class="avia-testimonial-meta">
			
			<div class='avia-testimonial-image' itemprop="image">
				<img width="180" height="180" src="assets/img/testi/<?= $v['foto'] ?>" class="avia-img-lazy-loading-10707 attachment-square size-square" alt="ck" decoding="async" loading="lazy" />
			</div>
			<div class='avia-testimonial-meta-mini' itemprop="author" itemscope="itemscope" itemtype="https://schema.org/Person">
				<strong class='avia-testimonial-name' itemprop="name"><?= $v['nama'] ?></strong>
				<span class='avia-testimonial-subtitle av_opacity_variation' itemprop="jobTitle">Alumni Tahun <?= $v['tahun'] ?></span>
			</div>
		</div>
	</div>
</div>
<?php
		$no++;
}
?>
</section>

</div>
<div class='hr av-kp27826z-15c70527de6c1a31f0f3f88122bb3f70 hr-invisible  avia-builder-el-37  el_after_av_testimonials  avia-builder-el-last '><span class='hr-inner '><span class="hr-inner-style"></span></span></div>
</div></div>
</div>
<div class='hr av-kr0t047t-133106f71ed60a0e608c51bf13a66975 hr-custom  avia-builder-el-48  el_after_av_one_fourth  avia-builder-el-last  hr-center hr-icon-no'><span class='hr-inner inner-border-av-border-thin'><span class="hr-inner-style"></span></span></div>
</div></div>
</div>

<div id='av-layout-grid-3' class='av-layout-grid-container av-84mvvc-6aa50ba0e9ccf25e94bed6252892dbcf entry-content-wrapper main_color av-flex-cells  avia-builder-el-23  el_after_av_layout_row  el_before_av_layout_row  grid-row-not-first  container_wrap fullsize'>
<div class='flex_cell av_one_full av-281mjns-d60f88cbaf9523f7d308563f706b5c26 no_margin  avia-builder-el-24  avia-builder-el-no-sibling '>
	<div class='flex_cell_inner'>
<section class='av_textblock_section av-276r088-e0a2f243da7253ca7ba3144abd2ca9f2' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div class='avia_textblock' itemprop="text">
		<p style="text-align: center;">
		<span style="font-size: 44px; color: #06337b; margin-top: 15px; line-height: 48px; text-align: center;">
		<b>Video Pilihan</b>
	</span>
</p>
</div></section>
<div class='av-special-heading av-to608q-c14b39712d4308df9441b6f094233882 av-special-heading-h4 custom-color-heading  avia-builder-el-26  el_after_av_textblock  el_before_av_codeblock '>
	<h4 class='av-special-heading-tag' itemprop="headline">Video</h4>
	<div class="special-heading-border">
		<div class="special-heading-inner-border">
		</div>
	</div>
</div>
<section class="avia_codeblock_section  avia_code_block_3" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div class='avia_codeblock' itemprop="text">
		<div class="bdpp-post-grid-wrap bdpp-post-data-wrap bdpp-design-12 bdpp-grid-3  bdpp-clearfix" id="bdpp-post-grid-1">
			
	
		<div class="bdpp-post-grid-inr-wrap bdpp-post-data-inr-wrap bdpp-clearfix">
			
<?php
include 'config/koneksi.php';
$no = 0;
$x = mysqli_query($konek, "SELECT * FROM tb_video");
foreach ($x as $s) {
	$no++;
	?>
	<div class="bdpp-post-grid bdpp-col-3 bdpp-columns bdpp-post-14063 bdpp-post-standard bdpp-has-thumb">

<div class="bdpp-post-grid-content">
<div class="bdpp-post-img-bg" data-toggle="modal" data-target="#exampleModalLong<?=$no; ?>" style="background-image:url(assets/img/video/<?=$s['gambar'] ?>)">
<div class="bdpp-post-overlay">
<h2 class="bdpp-post-title">
	<br><br>
<a href="" data-toggle="modal" data-target="#exampleModalLong<?=$no; ?>" value="<?=$s['judul'] ?>" target="_self"><?=$s['judul'] ?></a>
</h2>
<div class="bdpp-post-meta bdpp-post-meta-up">
<span  class="bdpp-post-meta-data bdpp-post-date">
		<i class='fa fa-play' style="font-size : 24px;">&ensp;&ensp;<?=$s['tanggal'] ?>
	</i>
	</ul>
	</span> 
</div>
</div>
</div>
<div class="bdpp-post-content">
<div class="bdpp-post-desc"><?=$s['keterangan'] ?></div>

</div>
</div>
</div>
<div class="modal fade" id="exampleModalLong<?=$no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Video <?=$s['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="#" method="post" class="popup-form">
               	<?php
					
				if($s['link'] == true){
					
					echo "$s[link]";	
			
					?>
					<?php
					} else {
						?>
                    <video width="500" height="350" controls preload="metadata">

    <source src="assets/video/<?= $s['video'] ?>" type="video/mp4"/>


    </video>
	<?php
					}
	?>

                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
    <?php
    }
    ?>     

</form></div></div></section>
<?php
$ml = mysqli_query($konek, "SELECT * FROM tb_pmb");

foreach($ml as $f){
	?>
<div id='av-layout-grid-6' class='av-layout-grid-container av-21khmlk-8a677125d68ad6cd5c3c9477015417b3 entry-content-wrapper main_color av-flex-cells  avia-builder-el-49  el_after_av_layout_row  el_before_av_layout_row  grid-row-not-first  container_wrap fullsize'>
<div class='flex_cell av_one_half av-20kxu2g-520865a77fd5f9fd4a2e3945c294b580 no_margin  avia-builder-el-50  el_before_av_cell_one_half  avia-builder-el-first '>
	<div class='flex_cell_inner'>
<section class='av_textblock_section av-1yulyqw-6ea61eb8e27a85fc39c6dfb6ef31368c' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	
	
	<div class='avia_textblock av_inherit_color' itemprop="text">

		
			<span style="font-size: 44px; color: #06337b; margin-top: 15px; line-height: 48px; text-align: center;">
		<b><?=$f['judul'] ?></b>
	</span>
</div></section>
<section class='av_textblock_section av-1yulyqw-6ea61eb8e27a85fc39c6dfb6ef31368c' itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div class='avia_textblock av_inherit_color' itemprop="text"><?=$f['deskripsi'] ?>
<input style="width: auto; min-width: 100px; padding: 10px; cursor: pointer; font-weight: medium; font-type: roboto; background: #06337b; color: #ffffff; border-radius: 0px; border: 0px solid #ffffff; font-size: 16px; text-align: center;" type="button" value="Daftar Sekarang" onclick="window.open('<?=$f['link'] ?>', '_self')" onmouseover="this.style.backgroundColor='#707070';return true;" onmouseout="this.style.backgroundColor='#06337b ';return true;" />
</div>
</section>
<div class='hr av-kp27826z-99ea8143b04d08485f7271a69ebdcb40 hr-invisible  avia-builder-el-53  el_after_av_textblock  el_before_av_codeblock '>
	<span class='hr-inner '><span class="hr-inner-style"></span></span></div>
<section class="avia_codeblock_section  avia_code_block_11" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div class='avia_codeblock ' itemprop="text">
		<div style="margin-top: 0px; margin-left: 0px; text-align: left;">
</div>
</div>
</section>
</div></div>

<div class='flex_cell av_one_half av-20kxu2g-520865a77fd5f9fd4a2e3945c294b580 no_margin  avia-builder-el-55  el_after_av_cell_one_half  avia-builder-el-last '>
	<div class='flex_cell_inner'>
<div class='avia-image-container av-kt18b0d8-78153ca182b8598b4c4b01095d6aaa51 av-styling- avia-align-center  avia-builder-el-56  avia-builder-el-no-sibling ' itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
	<div class="avia-image-container-inner">
		<div class="avia-image-overlay-wrap">
		<br><br><br>
			<img class='wp-image-10553 avia-img-lazy-loading-not-10553 avia_image' src='assets/img/pmb/<?=$f['gambar'] ?>' alt='' title='PMB UII 2021' height="572" width="1280" itemprop="thumbnailUrl" />
		</div>
	</div>
</div>
<?php
}
?>
</div></div>

<div id='av-layout-grid-7' class='av-layout-grid-container av-boba2-40d8236a32d9f9ef4ffaceaf3a17d1c0 entry-content-wrapper main_color av-flex-cells  avia-builder-el-57  el_after_av_layout_row  el_before_av_layout_row  grid-row-not-first  container_wrap fullsize'>
<div class='flex_cell av_one_full av-kpeth82r-b2e974eb884e06c11b15db8c67dff899 no_margin  avia-builder-el-58  avia-builder-el-no-sibling  av-zero-padding'><div class='flex_cell_inner'>
<section class='av_textblock_section av-10kzllk-ffad06871dcc892078cdff503123257d' itemscope="itemscope" itemtype="https://schema.org/CreativeWork"><div class='avia_textblock' itemprop="text">
<div id="sb_instagram" class="sbi sbi_mob_col_2 sbi_tab_col_4 sbi_col_4 sbi_width_resp" style="width: 100%;" data-feedid="*1" data-res="auto" data-cols="4" data-colsmobile="2" data-colstablet="4" data-num="4" data-nummobile="4" data-shortcode-atts="{&quot;feed&quot;:&quot;1&quot;}" data-postid="10138" data-locatornonce="68a0053540" data-sbi-flags="favorLocal">
<div id="sbi_images">
 </div>
<div id="sbi_load">
</div>
<span class="sbi_resized_image_data" data-feed-id="*1" data-resized="[]">
</span>
</div>
</div></section>
</div></div>
</div>
<div id='av-layout-grid-8' class='av-layout-grid-container av-16p1mi0-60608ad5b4f8b0daf5aa2c7181744a99 entry-content-wrapper main_color av-flex-cells  avia-builder-el-60  el_after_av_layout_row  avia-builder-el-last  grid-row-not-first av-desktop-hide av-medium-hide av-small-hide av-mini-hide container_wrap fullsize'>
<div class='flex_cell av_one_full av-42ztvc-2a423d7533eba36a8b9c8e166fbc2716 no_margin  avia-builder-el-61  avia-builder-el-no-sibling '><div class='flex_cell_inner'>
<section class="avia_codeblock_section  avia_code_block_12" itemscope="itemscope" itemtype="https://schema.org/CreativeWork"><div class='avia_codeblock ' itemprop="text"><table style="margin-left: auto;margin-right: auto; margin-top:30px;width:45%">
<tbody>
<tr>
<td align="center" style="border:0"><a href="https://www.facebook.com/fit.uii/" target="_blank"><img onmouseover="this.src='https://www.uii.ac.id/wp-content/uploads/2017/10/FB-New-2.png'" onmouseout="this.src='https://www.uii.ac.id/wp-content/uploads/2017/10/FB-New-1.png'" alt="" src="https://www.uii.ac.id/wp-content/uploads/2017/10/FB-New-1.png" /></a></td>
<td align="center" style="border:0"><a href="https://twitter.com/ftiuii" target="_blank"><img onmouseover="this.src='https://www.uii.ac.id/wp-content/uploads/2017/10/Twitter-New-2.png'" onmouseout="this.src='https://www.uii.ac.id/wp-content/uploads/2017/10/Twitter-New-1.png'" alt="" src="https://www.uii.ac.id/wp-content/uploads/2017/10/Twitter-New-1.png" /></a></td>
<td align="center" style="border:0"><a href="https://www.instagram.com/fti.uii/" target="_blank"><img onmouseover="this.src='https://www.uii.ac.id/wp-content/uploads/2017/10/IG-New-2.png'" onmouseout="this.src='https://www.uii.ac.id/wp-content/uploads/2017/10/IG-New-1.png'" alt="" src="https://www.uii.ac.id/wp-content/uploads/2017/10/IG-New-1.png" /></a></td>
<td align="center" style="border:0"><a href="https://www.youtube.com/channel/UC4BVwMiTkou5rjEquvL10Eg" target="_blank"><img onmouseover="this.src='https://www.uii.ac.id/wp-content/uploads/2017/10/YT-New-2.png'" onmouseout="this.src='https://www.uii.ac.id/wp-content/uploads/2017/10/YT-New-1.png'" alt="" src="https://www.uii.ac.id/wp-content/uploads/2017/10/YT-New-1.png" /></a></td>
</tr>
</tbody>
</table></div></section>
</div></div>
</div>
</div></div> </div></div>

<?php
require_once('footer.php')
?>
</div>
</div>
<a href='#top' title='Scroll to top' id='scroll-top-link' aria-hidden='true'  data-av_iconfont='entypo-fontello'><img src="assets/img/icons/arrow.png" alt=""><span class="avia_hidden_link_text">Scroll to top</span></a>
<a href="" class="cxv" data-toggle="modal" data-target="#exampleModalLong"  target="_self"><img src="assets/img/icons/cs.jpg" alt="" width="30px" height="30px"></a>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Chat Bot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
				<div class="wrapper">
        <div class="title">Simple Online Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
           <div class="user-inbox inbox">
                <div class="msg-header">
                    <button type="button" id="selamat" class="btn btn-outline-primary btn-sm">Selamat Datang</button>
                </div>
            </div>
            <!-- <div class="user-inbox inbox">
                <div class="msg-header">
                    <button type="button" id="saya" class="btn btn-outline-primary btn-sm">Nama Kamu?</button>
                </div>
            </div>
        </div> -->
        <?php
            $sql = mysqli_query($konek, "SELECT * FROM chat");

            foreach($sql as $s){
            ?>
            <div class="user-inbox inbox">
                <div class="msg-header">
                    <button type="button" id='<?=$s['id']?>' class="btn btn-outline-primary btn-sm"><?=$s['pertanyaan'] ?></button>
                </div>
            </div>
            <?php
            }
        ?>  
        </div>
        
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
			<?php
$sss = mysqli_query($konek, "SELECT * FROM chat");
$c = mysqli_num_rows($sss);
$no = 1;
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php
while($no <= $c){
    $r = mysqli_fetch_assoc($sss);
?>    
    <script>


            // $("#selamat").on("click", function(){
            //     $value = 'selamat';
            //     // $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
            //     // $(".form").append($msg);
            //     $("#data").val('');
                
            //     // start ajax code
            //     $.ajax({
            //         url: 'message.php',
            //         type: 'POST',
            //         data: 'text='+$value,
            //         success: function(result){
            //             $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p style="color:white;">'+ result +'</p></div></div>';
            //             $(".form").append($replay);
            //             // when chat goes down the scroll bar automatically comes to the bottom
            //             $(".form").scrollTop($(".form")[0].scrollHeight);
            //         }
            //     });
            // });
  
            $("#<?=$r['id']?>").on("click", function(){
                $value = '<?=$r['id']?>';
                // $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                // $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p style="color:white;">'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        
        
    </script>
      <?php
      $no++;
        }
          ?>    
          <script>
                    $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
          </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
<script type='text/javascript' id='sbi_scripts-js-extra'>
/* <![CDATA[ */
var sb_instagram_js_options = {"font_method":"svg","resized_url":"https:\/\/fit.uii.ac.id\/wp-content\/uploads\/sb-instagram-feed-images\/","placeholder":"https:\/\/fit.uii.ac.id\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png","ajax_url":"https:\/\/fit.uii.ac.id\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=6.1' id='sbi_scripts-js'></script>
<script type='text/javascript' id='layerslider-utils-js-extra'>
/* <![CDATA[ */
var LS_Meta = {"v":"7.0.7","fixGSAP":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-layerslider/LayerSlider/assets/static/layerslider/js/layerslider.utils.js?ver=7.0.7' id='layerslider-utils-js'></script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-layerslider/LayerSlider/assets/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=7.0.7' id='layerslider-js'></script>
<script type='text/javascript' id='layerslider-js-after'>
jQuery(function() { _initLayerSlider( '#layerslider_10_do1vhbwf40yz', {createdWith: '6.9.2', sliderVersion: '7.0.7', fullSizeMode: 'hero', allowFullscreen: false, pauseOnHover: 'enabled', skin: 'fullwidth', navStartStop: false, navButtons: false, showCircleTimer: false, useSrcset: true, skinsPath: 'https://fit.uii.ac.id/wp-content/themes/enfold/config-layerslider/LayerSlider/assets/static/layerslider/skins/'}); });
</script>
<script type='text/javascript' src='https://fit.uii.ac.id/wp-content/themes/enfold/config-layerslider/LayerSlider/assets/static/layerslider/js/layerslider.transitions.js?ver=7.0.7' id='layerslider-transitions-js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
