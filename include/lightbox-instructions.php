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
		&nbsp;
         <p>To use with animation</p>
        <p><strong><xmp>[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutDown" id="4"]</xmp></strong></p>
        &nbsp;
        <h3>Animations List</h3>
        <ul>
        	<li>slideInOutDown</li>
        	<li>slideInOutTop</li>
        	<li>slideInOutLeft (default)</li>
        	<li>slideInOutRight</li>
        	<li>zoomInOut</li>
        	<li>rotateInOutDown</li>
        	<li>mixInAnimations</li>
        </ul>

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

        <h3>Animations</h3>

        <xmp>
        <p>Frog Shadow Info Icon slideInOutDown: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutDown" id="4"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon slideInOutTop: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutTop" id="5"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon slideInOutLeft: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutLeft" id="6"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon slideInOutRight with title: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutRight" title="Frog Image" id="7"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon zoomInOut: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="zoomInOut" id="8"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon rotateInOutDown: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="rotateInOutDown" id="9"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon mixInAnimations: [gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="mixInAnimations" id="10"]</p>
        </xmp>
	</div>

	 &nbsp;
	 <h2 class="instructions-heading" id="code-preview">Code Preview:</h2>
	 <p>Frog Shadow Info Icon: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" id="1"]'); ?></p>
	&nbsp;
     <p>Little Frog Info Icon: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/little-frog.jpg" id="2"]'); ?></p>
	&nbsp;
     <p>Here is the <?php echo do_shortcode('[gdx_lightbox text="Little Frog Text" img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-hand.jpg" id="3"]'); ?></p>
	&nbsp;
     <h3 id="code-preview">Animations:</h3>

     <p>Frog Shadow Info Icon slideInOutDown: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutDown" id="4"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon slideInOutTop: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutTop" id="5"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon slideInOutLeft: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutLeft" id="6"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon slideInOutRight with title: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="slideInOutRight" title="Frog Image" id="7"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon zoomInOut: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="rotateInOutDown" id="9"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon mixInAnimations: <?php echo do_shortcode('[gdx_lightbox img="https://gdxdesigns.com/wp-content/uploads/2020/11/frog-shadow.jpg" animate="mixInAnimations" id="10"]'); ?></p>

</div>