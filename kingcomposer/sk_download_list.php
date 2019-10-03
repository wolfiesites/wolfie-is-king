<div class="sk_download_list">
	<?php foreach ($atts['options'] as $index => $option) {
		$text = $option->text;
		$fileID = $option->link;
		$fileURL = wp_get_attachment_url( $fileID );
		// echo $fileURL; 
		?>
		
		<div class="file-row">
			<div class="icon-wrapper">
				<i class="fa fa-file-pdf" aria-hidden="true"></i>
				<p><?php echo $text ?></p>
			</div><!-- /icon-wrapper -->
			<div class="button-wrapper">
				<a class="btn btn-file" href="<?php echo $fileURL ?>" target="_blank"><?php _e('Donwload', 'wolfie-king') ?></a>
			</div><!-- /button-wrapper -->
		</div><!-- /file-row -->

	<?php } ?>
</div><!-- /sk_download_list --> 	
