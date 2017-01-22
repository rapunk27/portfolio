<?php 
	$path = '../';
	$path2 = '../';

	$links = [
		"edm1" => "http://www.asiatravel.net/en-us/edm/united_arab_emirates/01_12_17.html",
		"edm2" => "http://www.asiatravel.net/en-us/edm/united_arab_emirates/12_23_16.html",
		"edm3" => "http://asiatravel.net/en-us/edm/united_arab_emirates/09_11_16.html",
		"edm4" => "http://www.asiatravel.net/en-us/edm/united_arab_emirates/07_19_16.html",
		"edm5" => "http://asiatravel.net/en-us/edm/united_arab_emirates/08_26_16.html",
		"edm6" => "http://asiatravel.net/en-us/edm/united_arab_emirates/09_26_16.html"
	];

 ?>

<?php include('../head.php'); ?>

<div class="html-email-section">
	<div class="row">
		<div class="large-12 columns">
			<h1 class="text-center edm-label"> HTML Email</h1>
		</div>
	</div>
<div class="row">
	<div class="small-8 small-offset-2 columns text-center">
		<p class="work-note">
			Although they are similar to EDMs.., well they actually are but the difference is that once the JPEG layout is approved by the one who requested it, we proceed with the coding so that they can blast it tour clients' emails. You may either view the JPEG layout or view the coded layout. 
		</p>
	</div>
</div>


	<div class="row small-up-2 medium-up-3 large-up-4" style="margin-top: 20px;">
<!-- Looping all the image files here -->
	<?php foreach(glob('./html-email-images/*.*') as $index => $file): ?>
		<?php $exif = exif_read_data($file); ?>

		<div class="large-4 columns">
			<div class="card html-email-image">
				<div class="card-divider">
					<h6 class="edm-title"><?php echo substr($file, 23, -4); ?></h6>	
				</div>
				<div class="ih-item square effect6 from_top_and_bottom">
					<a>
						<div class="img">
							<img src="<?php echo $file; ?>">
						</div>
						<div class="info">
						<h3>
							<?php $index++; 
							 $index_var = 'edm'.$index; 

							?>
							<button class="button primary" type="submit"
							 onclick="window.open('<?php echo $links[$index_var]; ?>','_blank')">
								<i class="fa fa-link"></i> Link
							</button>

							<button class="button warning" data-open="html-email<?php echo $index; ?>">
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

	
<?php foreach(glob('./html-email-images/*.*') as $index => $file): ?>	
	<?php $index++; ?>
	<div class="reveal" id="html-email<?php echo $index; ?>" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-right">
	 	<img src="<?php echo $file; ?>">
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endforeach; ?>
</div>



<?php include('../foot.php') ?>