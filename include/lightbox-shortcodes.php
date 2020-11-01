<?php
// ===============================================================
// lightbox-shortcodes.php
//
// Shortcode usage - WP editors can add the shortcodes       
// ----------------------------------------------------------------

add_shortcode('gdx_lightbox', 'lightbox_init');

function lightbox_init($atts) { 

  $atts = shortcode_atts( 
    array(
      'img' => '',
      'id' => ''
    ), 
    $atts
  );

    if ( ! empty( $atts['img'] ) ) {
        $img = $atts['img'];
    }

    if ( ! empty( $atts['id'] ) ) {
        $id = $atts['id'];
    }

    

      $tooltip_img = WP_PLUGIN_URL . '/gdx-lightbox-tooltip/include/assets/img/info.png';
      //$construct .= '<img src="'.$img.'">';
      

      $construct = '<div class="gdx-lightbox-container">';
      $construct .= '<div class="gdx-btn-group">';
      $construct .= '  <a type="button" class="gdx-open-modal" data-open="modal'.$id.'">';
      $construct .= '  <img src="'.$tooltip_img.'">';
      $construct .= '  </a>';
      $construct .= '</div>';
      $construct .= '</div>';
    
    
      $construct .= '<div class="gdx-modal" id="modal'.$id.'" data-animation="slideInOutLeft">';
      $construct .= '<div class="gdx-modal-dialog">';
      $construct .= '<header class="gdx-modal-header">';
      $construct .= '   <a class="gdx-close-modal" aria-label="close modal" data-close>';
      $construct .= '✕';
      $construct .= '   </a>';
      $construct .= '  </header>';
      $construct .= '  <section class="gdx-modal-content">';
      $construct .= '<img src="'.$img.'">';
      $construct .= '  </section>';
      $construct .= '  <footer class="gdx-modal-footer">';
      $construct .= '  </footer>';
      $construct .= ' </div>';
      $construct .= ' </div>';
    
    
      
      return $construct; 


} 

?>