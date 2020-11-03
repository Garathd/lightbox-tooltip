<link rel="stylesheet" href="<?php echo plugins_url('/assets/css/lightbox-tooltip.css', __FILE__); ?>">
<script src="<?php echo plugins_url('/assets/js/jquery.min.js', __FILE__); ?>"></script>
<script src="<?php echo plugins_url('/assets/js/lightbox-tooltip.js', __FILE__); ?>"></script>


<style>
    .instructions-heading {
        font-size: 1.8em !important;
    }
    .lightbox-instructions strong {
        font-size: 1.2em !important;      
    }
</style>

<div class="lightbox-instructions">
	<div class="lightbox-tooltip-instructions-header">
		<h2 class="instructions-heading" id="use-shortcodes">How to use (Shortcodes):</h2>

		<p>To use Lightbox Tooltip on a page you must first use the below shortcode</p>
        <p><strong><xmp>[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" id="1"]</xmp></strong></p>
        &nbsp;
        <p>Make sure to always use a different id as well for each individual image</p>
        <p><strong><xmp>[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/little-frog.jpg" id="2"]</xmp></strong></p>
		&nbsp;
        <p>To use with text instead of the information icon</p>
        <p><strong><xmp>[gdx_lightbox text="Little Frog Text" img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-hand.jpg" id="3"]</xmp></strong></p>

	</div>
	&nbsp;
	<div class="lightbox-tooltip-instructions-content">
		<h2 class="instructions-heading" id="code-example">Code Example:</h2>

		<xmp>
        <p>Frog Shadow Info Icon: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" id="1"]</p>
        </xmp>

        <xmp>
        <p>Little Frog Info Icon: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/little-frog.jpg" id="2"]</p>
        </xmp>

        <xmp>
        <p>Here is the [gdx_lightbox text="Little Frog Text" img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-hand.jpg" id="3"]</p>
        </xmp>

	</div>

	 &nbsp;
	 <h2 class="instructions-heading" id="code-preview">Code Preview:</h2>
	 <p>Frog Shadow Info Icon: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" id="1"]'); ?></p>
     <p>Little Frog Info Icon: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/little-frog.jpg" id="2"]'); ?></p>
     <p>Here is the <?php echo do_shortcode('[gdx_lightbox text="Little Frog Text" img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-hand.jpg" id="3"]'); ?></p>

</div>