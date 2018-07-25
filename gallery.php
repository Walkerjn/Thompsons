<?php $page_title ="Gallery";?>
	<?php $pageDescription ="Contact us for a free esitmate for all of your decorating or maintenace needs..";?>
		<?php $page = "Gallery"; ?>

			<?php include("header.php");?>
				<div class="main-content" style="margin-top: 120px;">
					<div class="container">
						<div class="user-info lightbg">
							<div class="user-info-inner" style="color:#4e4e4e;">
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12 darktxt">
										<div class="home-main-content">
											<p class="home-headings">Gallery</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12 col-lg-12">
										<div id="mosaic" class="mosaic">
											<img src="img/IMG_1277-min.JPG" data-high-res-image-src="img/IMG_1277-min.JPG">
											<img src="img/IMG_0323-min.JPG" data-high-res-image-src="img/IMG_0323-min.JPG">
											<img src="img/IMG_0314-min.JPG" data-high-res-image-src="img/IMG_0314-min.JPG">
											<img src="img/IMG_1171-2-min.JPG" data-high-res-image-src="img/IMG_1171-2-min.JPG">
											<img src="img/gardening-new.jpeg" data-high-res-image-src="img/gardening-new.jpeg">
											<img src="img/maintenance-new.jpeg" data-high-res-image-src="img/maintenance-new.jpeg">
											<img src="img/gallery5.jpeg" data-high-res-image-src="img/gallery5.jpeg">
											<img src="img/painting-header-img-min.jpg" data-high-res-image-src="img/painting-header-img-min.jpg">
											<img src="img/paint-section.jpeg" data-high-res-image-src="img/paint-section.jpeg">
											<img src="img/gallery1.jpeg" data-high-res-image-src="img/gallery1.jpeg">
											<img src="img/gallery2.jpeg" data-high-res-image-src="img/gallery2.jpeg">
											<img src="img/gallery3.jpeg" data-high-res-image-src="img/gallery3.jpeg">

											<img src="img/gallery4.jpeg" data-high-res-image-src="img/gallery4.jpeg">
											<img src="img/garden-header-img-min.jpg" data-high-res-image-src="img/garden-header-img-min.jpg">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function () {
						$('#mosaic').Mosaic({
							innerGap: 10,
							maxRowHeight: 400,
						});
					});
				</script>
				<?php include("footer.php");?>