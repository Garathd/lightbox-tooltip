<?php 
    // Images
    $frog_hand = esc_url( plugins_url( "/assets/img/frog-hand.jpg", __FILE__ ) );
    $frog_shadow = esc_url( plugins_url( "/assets/img/frog-shadow.jpg", __FILE__ ) );
    $little_frog = esc_url( plugins_url( "/assets/img/little-frog.jpg", __FILE__ ) );
    $tooltip = esc_url( plugins_url( "/assets/img/tooltip.png", __FILE__ ) ) ;
?>

<div class="lightbox-instructions">
	<div class="lightbox-tooltip-instructions-header">
		<h2 class="lightbox-instructions-heading" id="use-shortcodes">How to use (Shortcodes):</h2>

		<p>To use Lightbox Tooltip on a page you must first use the below shortcode:</p>
        <p><strong><xmp>[gdx_lightbox img="<?php echo $frog_shadow; ?>" id="1"]</xmp></strong></p>
        <hr />
        &nbsp;
        <p>Make sure to always use a different id as well for each individual image:</p>
        <p><strong><xmp>[gdx_lightbox img="<?php echo $little_frog; ?>" id="2"]</xmp></strong></p>
        <hr />
		&nbsp;
        <p>To use with text instead of the information icon:</p>
        <p><strong><xmp>[gdx_lightbox text="Little Frog Text" img="<?php echo $frog_hand; ?>" id="3"]</xmp></strong></p>
        <hr />
		&nbsp;
        <p>Little Frog with Custom Icon:</p>
        <p><strong><xmp>[gdx_lightbox img="<?php echo $frog_hand; ?>" id="4" tooltip="<?php echo $tooltip; ?>"]</xmp></strong></p>
        <hr />
        &nbsp;
        <p>To use with animation:</p>
        <p><strong><xmp>[gdx_lightbox img="<?php echo $frog_shadow; ?>" animate="slideInOutDown" id="5"]</xmp></strong></p>
        <hr />
        &nbsp;
        <p>To use with hover instead of click:</p>
        <p><strong><xmp>[gdx_lightbox img="<?php echo $frog_shadow; ?>" hover="1" id="13"]</xmp></strong></p>
        <hr />
        &nbsp;
        <p>To use with HTML/Text embeded inside Lightbox:</p>
        <p><strong><xmp>[gdx_lightbox_text id="12" img="<?php echo $frog_shadow; ?>"]</xmp></strong>

        <p style="margin-left: 1%;">Enter text here and images or any html inside. All the standard shortcode attributes still work with this shortcode.</p>

        <strong><xmp>[/gdx_lightbox_text]</xmp></strong>
        </p>
        <hr />
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
        &nbsp;
        <hr />
        <h3>Attributes List</h3>
        <ul>
            <li>text</li>
            <li>tooltip</li>
            <li>img</li>
            <li>animate</li>
            <li>title</li>
            <li>hover</li>
            <li>id</li>
        </ul>
        &nbsp;
        <hr />
	</div>
	&nbsp;
	<div class="lightbox-tooltip-instructions-content">
		<h2 class="lightbox-instructions-heading" id="code-example">Code Example:</h2>
        
        <h3>Basic</h3>

		<xmp>
        <p>Frog Shadow Info Icon: [gdx_lightbox img="<?php echo $frog_shadow; ?>" id="1"]</p>
        </xmp>

        <xmp>
        <p>Little Frog Info Icon: [gdx_lightbox img="<?php echo $little_frog; ?>" id="2"]</p>
        </xmp>

        <xmp>
        <p>Here is the: [gdx_lightbox text="Little Frog Text" img="<?php echo $frog_hand; ?>" id="3"]</p>
        </xmp>

        <xmp>
        <p>Little Frog with Custom Icon: [gdx_lightbox img="<?php echo $frog_hand; ?>" tooltip="<?php echo $tooltip; ?>" id="4"]</p>
        </xmp>
        <hr />

        <xmp>
        <p>Little Frog with Hover instead of click: [gdx_lightbox img="<?php echo $frog_hand; ?>" hover="1" id="13"]</p>
        </xmp>
        <hr />

        <h3>Advanced</h3>

        <xmp>
        <p>Embed HTML and Text Content: [gdx_lightbox_text id="12" img="<?php echo $frog_shadow; ?>"]

        Enter text here and images or any html inside. All the standard shortcode attributes still work with this shortcode.

        [/gdx_lightbox_text]</p>

        </xmp>
        <hr />

        <h3>Animations</h3>

        <xmp>
        <p>Frog Shadow Info Icon slideInOutDown: [gdx_lightbox img="<?php echo $frog_shadow; ?>" animate="slideInOutDown" id="5"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon slideInOutTop: [gdx_lightbox img="<?php echo $frog_shadow; ?>" animate="slideInOutTop" id="6"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon slideInOutLeft: [gdx_lightbox img="<?php echo $frog_shadow; ?>" animate="slideInOutLeft" id="7"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon slideInOutRight with title: [gdx_lightbox img="<?php echo $frog_shadow; ?>" animate="slideInOutRight" title="Frog Image" id="8"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon zoomInOut: [gdx_lightbox img="<?php echo $frog_shadow; ?>" animate="zoomInOut" id="9"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon rotateInOutDown: [gdx_lightbox img="<?php echo $frog_shadow; ?>" animate="rotateInOutDown" id="10"]</p>
        </xmp>

        <xmp>
        <p>Frog Shadow Info Icon mixInAnimations: [gdx_lightbox img="<?php echo $frog_shadow; ?>" animate="mixInAnimations" id="11"]</p>
        </xmp>
        <hr />
	</div>

	 &nbsp;
	 <h2 class="lightbox-instructions-heading" id="code-preview">Code Preview:</h2>

     <h3 id="code-preview">Basic:</h3>
	 <p>Frog Shadow Info Icon: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_shadow.'" id="1"]'); ?></p>
	 &nbsp;
     <p>Little Frog Info Icon: <?php echo do_shortcode('[gdx_lightbox img="'.$little_frog.'" id="2"]'); ?></p>
	 &nbsp;
     <p>Here is the: <?php echo do_shortcode('[gdx_lightbox text="Little Frog Text" img="'.$frog_hand.'" id="3"]'); ?></p>
     &nbsp;
     <p>Little Frog with Custom Icon: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_hand.'" id="4" tooltip="'.$tooltip.'"]'); ?></p>
	 &nbsp;
     <p>Little Frog with Hover instead of click: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_hand.'" id="13" hover="1"]'); ?></p>
	 &nbsp;
     <hr />
     <h3 id="code-preview">Advanced:</h3>
     <p>Embed HTML and Text Content: <?php echo do_shortcode('[gdx_lightbox_text id="12" img="'.$frog_shadow.'"]'."<p>Enter text here and images or any html inside. All the standard shortcode attributes still work with this shortcode.</p>".'[/gdx_lightbox_text]'); ?></p>
     &nbsp;
     <hr />
     <h3 id="code-preview">Animations:</h3>

     <p>Frog Shadow Info Icon slideInOutDown: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_shadow.'" animate="slideInOutDown" id="5"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon slideInOutTop: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_shadow.'" animate="slideInOutTop" id="6"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon slideInOutLeft: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_shadow.'" animate="slideInOutLeft" id="7"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon slideInOutRight with title: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_shadow.'" animate="slideInOutRight" title="Frog Image" id="8"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon zoomInOut: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_shadow.'" animate="zoomInOut" id="9"]'); ?></p>
    &nbsp;
     <p>Frog Shadow Info Icon rotateInOutDown: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_shadow.'" animate="rotateInOutDown" id="9"]'); ?></p>
	&nbsp;
     <p>Frog Shadow Info Icon mixInAnimations: <?php echo do_shortcode('[gdx_lightbox img="'.$frog_shadow.'" animate="mixInAnimations" id="11"]'); ?></p>

</div>