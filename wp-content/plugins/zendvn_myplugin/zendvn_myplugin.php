<?php
/*
Plugin Name: zend_plugin
Plugin URI: http://zend.vn/
Description:
Author: zendvn
Version: 1.0
Author URI: http://zend.vn/

*/
register_deactivation_hook(__FILE__, 'zendvn_mp_deactive');

//==========================================================
// ví dụ 1
// =========================================================
// $aaa = 'a:3:{s:6:"course";s:9:"wordperss";s:7:"atuthor";s:6:"zendvn";s:7:"website";s:11:"www.zend.vn";}';
// print_r(unserialize($aaa));
// function zendvn_mp_active() {
//     $zendvn_mp_option = array(
//         'course' => 'wordperss',
//         'atuthor' => 'zendvn',
//         'website' => 'www.zend.vn',
//     );
//     add_option("zendvn_mp_option",$zendvn_mp_option, '', 'yes');
// }


// =========================================================
// ví dụ 2      
// =========================================================

global $wpdb;   // đổi tượng tương tác với database của wordfress 1 biến toàn cục
// echo '<pre>';
// print_r($wpdb);
// echo '</pre>';
// $table_name = $wpdb->prefix . "zendvn_mp_test";
function zendvn_mp_active() {
    global $wpdb;
    $table_name = $wpdb->prefix . "option";
    $wpdb->update();

}