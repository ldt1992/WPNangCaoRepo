<?php
/**
 * Created by PhpStorm.
 * User: QA11
 * Date: 9/28/2017
 * Time: 10:53 AM
 */

/**
 * Plugin Name: My First Plugin Demo // Tên của plugin
 * Plugin URI: http://hocwp.net // Địa chỉ trang chủ của plugin
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi. // Phần mô tả cho plugin
 * Version: 1.0 // Đây là phiên bản đầu tiên của plugin
 * Author: Duc Tai // Tên tác giả, người thực hiện plugin này
 * Author URI: http://ductai.com // Địa chỉ trang chủ của tác giả
 * License: GPLv2 or later // Thông tin license của plugin, nếu không quan tâm thì bạn cứ để GPLv2 vào đây
 */

if ( !class_exists('My_First_Plugin') ) { // Nếu class My_First_Plugin chưa tồn tại thì tạo class này
    class My_First_Plugin {
        function __construct() // Hàm Khởi tạo
        {
            if ( !function_exist( 'add_shortcode' ) ) {
                return;
            }
            add_shortcode('hello', array(&$this, 'hello_func')); // tạo 1 neo (hook) cho thẻ shortcode
        }

        function hello_func( $atts = array(), $content = null ) { // Tạo hàm hello_func
            extract(shortcode_atts( array('name' => 'World'), $atts )); // Bung cac bien tuy chon cua Shortcode
            return '<div><p>Hello '.$name.'!!!</p></div>'; // Giá trị trả về của Shortcodes
        }
    }
}

function load(){
    global $mfp;
    $mfp = new My_First_Plugin();
}
add_action('plugins_loaded', 'mfp_load');