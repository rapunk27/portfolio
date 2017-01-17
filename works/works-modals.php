
<!-- Used Images in DAP -->
<?php foreach(glob('./dap-images/used/*.*') as $index => $file): ?>	
	<div class="large reveal" id="<?php echo substr($file, 18, -4); ?>" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-right">
	 	<img src="<?php echo $file; ?>">
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endforeach; ?>

