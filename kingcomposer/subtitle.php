<?php 
extract($atts);
?>

<div class="subtitle-wrapper d-flex <?php echo $atts['subtitle-class'] ?>">
	<div class="subtitle-inner">
		<div class="subtitle-line" style="background:<?php echo $atts['line-color'] ?>;"></div>
		<h2 class="subtitle-header" style="color:<?php echo $atts['text-color'] ?>;"><?php echo $atts['subtitle-title'] ?></h2>
		<div class="subtitle-line"style="background:<?php echo $atts['line-color'] ?>;"></div>
	</div><!-- /subtitle-inner -->
</div><!-- /subtitle-wrapper -->