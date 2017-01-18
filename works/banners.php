<?php 
	$path = '../';
	$path2 = '../';
 ?>

<?php include('../head.php'); ?>

<div class="banner-section">
	<div class="row">
		<div class="large-12 columns">
			<h1 class="text-center edm-label"> Banners</h1>
		</div>
	</div>


	<div class="row small-up-2 large-up-4" style="margin-top: 20px;">
<!-- Looping all the image files here -->
	<?php foreach(glob('./banner-images/*.*') as $index => $file): ?>
		<?php $exif = exif_read_data($file); ?>
		<div class="large-4 columns">
			<div class="card banner-image">
				<div class="card-divider">
					<h6 class="edm-title"><?php echo substr($file, 19, -4); ?></h6>	
				</div>
				<div class="ih-item square effect6 from_top_and_bottom">
					<a>
						<div class="img">
							<img src="<?php echo $file; ?>">
						</div>
						<div class="info">
						<h3>
							<button class="button warning large" data-open="banner<?php echo $index; ?>">
								<i class="fa fa-search"></i> View
							</button>
						</h3>
						</div>
					</a>
				</div>
				<div class="img">
					<img src="<?php echo $file; ?>" class="thumbnail">
				</div>
				<div class="info">
					<h3>Heading here</h3>
					<button class="button primary">Click</button>
				</div>
			</div>
		</div>

	<?php endforeach; ?>
</div>

	
<?php foreach(glob('./banner-images/*.*') as $index => $file): ?>	
	<div class="reveal" id="banner<?php echo $index; ?>" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-right">
	 	<img src="<?php echo $file; ?>">
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endforeach; ?>
</div>



<?php include('../foot.php') ?>