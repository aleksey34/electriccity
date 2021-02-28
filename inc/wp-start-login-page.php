<?php
/**
 * add custom img in start login page
 */

function  electric_login_logo(){
echo '
<style type="text/css">
    #login h1 a {
     background: url('. get_stylesheet_directory_uri() .'/img/logo.png) no-repeat 0 0 !important;
      width: 260px;
      height: 160px;
      }
</style>';
}
add_action('login_head', 'electric_login_logo');