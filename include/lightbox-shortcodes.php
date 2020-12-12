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
      'tooltip' => '',
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

    if ( ! empty( $atts['tooltip'] ) ) {
        $tooltip = $atts['tooltip'];
    }

    if ( ! empty( $atts['img'] ) ) {
        $img = $atts['img'];
    }

    if ( ! empty( $atts['animate'] ) ) {
        $animate = $atts['animate'];
    } 
    else {
        $animate = "slideInOutLeft";
    }

    if ( ! empty( $atts['title'] ) ) {
        $title = $atts['title'];
    }

    if ( ! empty( $atts['id'] ) ) {
        $id = $atts['id'];
    }

      $default_tooltip_img = WP_PLUGIN_URL . '/gdx-lightbox-tooltip/include/assets/img/info.png';
      
      $construct = '  <a type="button" id="gdx-lighbox-modal-unique-'.$id.'" class="gdx-open-modal lightbox-link" data-open="gdx-lighbox-modal-'.$id.'">';

      if(!$text && !$tooltip){
        $construct .= '<img src="'.$default_tooltip_img.'">';
      } 

      else {
        // Only Show If Tooltip is Defined
        if($tooltip) {
          $construct .= '<img src="'.$tooltip.'">';
        }
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

add_shortcode('gdx_lightbox_text', 'lightbox_advanced');

function lightbox_advanced($atts = array(), $content = null ) { 

  if ( ! empty( $atts['text'] ) ) {
      $text = $atts['text'];
  }

  if ( ! empty( $atts['tooltip'] ) ) {
        $tooltip = $atts['tooltip'];
  }

  if ( ! empty( $atts['img'] ) ) {
      $img = $atts['img'];
  }

  if ( ! empty( $atts['animate'] ) ) {
      $animate = $atts['animate'];
  } 
  
  else {
    $animate = "slideInOutLeft";
  }

  if ( ! empty( $atts['title'] ) ) {
        $title = $atts['title'];
  } 

  if ( ! empty( $atts['id'] ) ) {
        $id = $atts['id'];
  } 

  
  /*Contruction*/

  $default_tooltip_img = WP_PLUGIN_URL . '/gdx-lightbox-tooltip/include/assets/img/info.png';
  //$construct .= '<img src="'.$img.'">';
      
  $lightbox_data = '<a type="button" id="gdx-lighbox-modal-unique-'.$id.'" class="gdx-open-modal lightbox-link" data-open="gdx-lighbox-modal-'.$id.'">';

  if(!$text && !$tooltip){
    $lightbox_data .= '<img src="'.$default_tooltip_img.'">';
  } 

  else {
    $lightbox_data .= '<img src="'.$tooltip.'">';
  }

  if($text){
    $lightbox_data .= $text;
  }

      $lightbox_data .= '  </a>';
    
      $lightbox_data .= '<div class="gdx-modal" id="gdx-lighbox-modal-'.$id.'" data-animation="'.$animate.'">';
      $lightbox_data .= '<div class="gdx-modal-dialog">';
      $lightbox_data .= '<header class="gdx-modal-header">';
      $lightbox_data .= '   <a class="gdx-close-modal" aria-label="close modal" data-close>';
      $lightbox_data .= '✕';
      $lightbox_data .= '   </a>';
      $lightbox_data .= '  </header>';
      $lightbox_data .= '  <section class="gdx-modal-content">';
      if($img) {
        $lightbox_data .= '<img src="'.$img.'">';
      }
      $lightbox_data .= $content;
      $lightbox_data .= '  </section>';
      $lightbox_data .= '  <footer class="gdx-modal-footer">';
      $lightbox_data .= '  <h3 class="gdx-modal-image-title">'.$title.'</h3>';
      $lightbox_data .= '  </footer>';
      $lightbox_data .= ' </div>';
      $lightbox_data .= ' </div>';
    
  return $lightbox_data;
} 


?>