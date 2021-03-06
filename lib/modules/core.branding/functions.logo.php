<?php

if ( !function_exists( 'shoestrap_logo' ) ) :
/*
 * The site logo.
 * If no custom logo is uploaded, use the sitename
 */
function shoestrap_logo() {
  $logo  = shoestrap_getVariable( 'logo' );

  if ( !empty( $logo['url'] ) )
    echo '<img id="site-logo" src="' . $logo['url'] . '" alt="' . get_bloginfo( 'name' ) . '">';
  else
    echo '<span class="sitename">' . bloginfo( 'name' ) . '</span>';
}
endif;

if ( !function_exists( 'shoestrap_branding_class' ) ) :
function shoestrap_branding_class( $echo = true ) {
  $logo  = shoestrap_getVariable( 'logo' );

  // apply the proper class
  $class = ( !empty( $logo['url'] ) ) ? 'logo' : 'text';

  // echo or return the value
  if ( $echo )
    echo $class;
  else
    return $class;
}
endif;