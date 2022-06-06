<div class="site-blocks-cover overlay" style="background-image: url(images/mercure0.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-7 text-center" data-aos="fade">
				<span class="caption mb-3">Mercure Hotel &amp; Resort</span>
				<h1 class="mb-4">About Us</h1>
			</div>
		</div>
	</div>
</div>
<div class="site-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 mb-5 mb-md-0">
				
				<div class="img-border">
					<img src="images/Capture2.JPG" alt="" class="img-fluid">
				</div>
				<img src="images/mercure2.jpg" alt="Image" class="img-fluid image-absolute">
				
			</div>
			<div class="col-md-5 ml-auto">
				<div class="section-heading text-left">
              <h2 class="mb-5">Deskripsi</h2>
            </div>
				<p class="mb-4">Distrik Bisnis dapat dicapai dengan berjalan kaki dan hanya 20 menit dari Pusat Kota Depok, hotel Mercure Depok dengan 146 kamar dilengkapi 1 Ballroom dan 5 ruang rapat. Tempat yang ideal untuk rapat bisnis, seminar, peluncuran produk, pernikahan, dan acara sosial lainnya. 
				Hotel Mercure Depok berlokasi strategis tepat di pusat kota Depok. Nikmati berbelanja di pusat perbelanjaan dekat hotel. Baik berkunjung untuk bisnis maupun berlibur, hotel Mercure ini menawarkan tempat menginap ideal untuk menjelajahi berbagai tengara kota yang penting dan beragam tempat wisata, serta untuk berbisnis.
				Depok adalah salah satu hotel mewah di Indonesia. Terletak dekat Pusat perbelanjaan dan stasiun, Mercure Depok berada dekat dengan banyak daya tarik ekowisata, memastikan keseimbangan sempurna antara aktivitas bisnis dan rekreasi Anda.</p>
			</div>
		</div>
	</div>
</div>
<?php
if(!isset($_GET['id']))
{
?>
<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Staff Hotel</h2>
			</div>
		</div>
		
		<div class="row">
		<?php 
		include "koneksi.php";
		$staff = mysqli_query ($conn,"select * from staff order by id_staff LIMIT 10");
		while($sql = mysqli_fetch_array($staff)){
		 
		?>
			<div class="col-md-4 col-lg-4 mb-6">
				<div class="hotel-room text-center">
					<a href="#" class="d-block mb-4 thumbnail"> <a href="?page=detail&id=<?php echo $sql['id_staff'] ?>"> </a>
					<div class="p-4">
						<h3 class="heading mb-3"><a href="?page=detail&id=<?php echo $sql['id_staff'] ?>"> <?php echo $sql['nama'] ?></a></h3>
						<p><?php echo substr( $sql['deskripsi'],0,37); ?> <a href="?page=detail&id=<?php echo $sql['id_staff'] ?>">... selengkapnya </a> </p>
					</div>
				</div>
			</div>
			<?php 
		    } 
		    ?>
		</div>
		
	</div>
</div>
<?php
}else{
?>
<div class="site-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 mb-5 mb-md-0">
				
				<div class="img-border">
					<img src="images/Capture2.JPG" alt="" class="img-fluid">
				</div>
				<img src="images/mercure2.jpg" alt="Image" class="img-fluid image-absolute">
				
			</div>
			<div class="col-md-5 ml-auto">
				<div class="section-heading text-left">
              <h2 class="mb-5">Deskripsi</h2>
            </div>
				<p class="mb-4">Distrik Bisnis dapat dicapai dengan berjalan kaki dan hanya 20 menit dari Pusat Kota Depok, hotel Mercure Depok dengan 146 kamar dilengkapi 1 Ballroom dan 5 ruang rapat. Tempat yang ideal untuk rapat bisnis, seminar, peluncuran produk, pernikahan, dan acara sosial lainnya. 
				Hotel Mercure Depok berlokasi strategis tepat di pusat kota Depok. Nikmati berbelanja di pusat perbelanjaan dekat hotel. Baik berkunjung untuk bisnis maupun berlibur, hotel Mercure ini menawarkan tempat menginap ideal untuk menjelajahi berbagai tengara kota yang penting dan beragam tempat wisata, serta untuk berbisnis.
				Depok adalah salah satu hotel mewah di Indonesia. Terletak dekat Pusat perbelanjaan dan stasiun, Mercure Depok berada dekat dengan banyak daya tarik ekowisata, memastikan keseimbangan sempurna antara aktivitas bisnis dan rekreasi Anda.</p>
			</div>
		</div>
	</div>
</div>
<?php
}