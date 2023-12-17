<?php 

 /**
  * Public  Class 
  */

  namespace Composered\Public;

  class Public {
      public function __construct() {
          // Test Shortcode 
          add_shortcode('composered', [$this, 'register_shortcode']);
      }
  
      public function register_shortcode() {

         echo "We just got composer to work with the WordPress Set up"; 
          
      }
  
      // Add other public-related functions here
  }
  
