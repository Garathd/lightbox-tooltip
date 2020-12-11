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
      'text' => '',
      'img' => '',
      'animate' => '',
      'title' => '',
      'id' => ''
    ), 
    $atts
  );

    if ( ! empty( $atts['text'] ) ) {
        $text = $atts['text'];
    }

    if ( ! empty( $atts['img'] ) ) {
        $img = $atts['img'];
    }

    if ( ! empty( $atts['animate'] ) ) {
        $animate = $atts['animate'];
    } else {
      $animate = "slideInOutLeft";
    }

    if ( ! empty( $atts['title'] ) ) {
      $title = $atts['title'];
    }

    if ( ! empty( $atts['id'] ) ) {
        $id = $atts['id'];
    }

    

      $tooltip_img = WP_PLUGIN_URL . '/gdx-lightbox-tooltip/include/assets/img/info.png';
      //$construct .= '<img src="'.$img.'">';
      
      $construct .= '  <a type="button" id="gdx-lighbox-modal-unique-'.$id.'" class="gdx-open-modal lightbox-link" data-open="gdx-lighbox-modal-'.$id.'">';

      if(!$text){
        $construct .= '<img src="'.$tooltip_img.'">';
      }

      if($text){
        $construct .= $text;
      }

      $construct .= '  </a>';
    
      $construct .= '<div class="gdx-modal" id="gdx-lighbox-modal-'.$id.'" data-animation="'.$animate.'">';
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
      $construct .= '  <h3 class="gdx-modal-image-title">'.$title.'</h3>';
      $construct .= '  </footer>';
      $construct .= ' </div>';
      $construct .= ' </div>';
    
      return $construct; 


} 

?>