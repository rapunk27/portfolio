<?php 
	$path = '../';
	$path2 = '../';
 ?>

<?php include('../head.php'); ?>


<div class="row small-up-2 large-up-4" style="margin-top: 20px;">
<!-- Looping all the image files here -->
	<?php foreach(glob('./edm-images/*.*') as $index => $file): ?>
		<?php $exif = exif_read_data($file); ?>
		<div class="large-4 columns" data-open="edm<?php echo $index; ?>">
			<div class="card edm-image">
				<div class="card-divider">
					<h6 class="edm-title"><?php echo substr($file, 16, -4); ?></h6>	
				</div>
				<div class="ih-item square effect6 from_top_and_bottom">
					<a href="#">
						<div class="img">
							<img src="<?php echo $file; ?>">
						</div>
						<div class="info">
							<h3>Heading here</h3>
							<button class="button primary">Click</button>
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
		<?php foreach($exif as $key => $section): ?>
			<p><?php echo $section; ?></p>
		<?php endforeach; ?>
		
	<?php endforeach; ?>
</div>

	
<?php foreach(glob('./edm-images/*.*') as $index => $file): ?>	
	<div class="reveal" id="edm<?php echo $index; ?>" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-right">
	 	<img src="<?php echo $file; ?>">
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endforeach; ?>


<?php include('../foot.php'); ?>

