<?php
/**
 * @package Hello_New_Plugin
 * @version 1.0
 */
/*
Plugin Name: Say Hello
Plugin URI: lochp.wordpress.com/plugin
Description: This is my first plugin which I created
Author: Loc Huynh
Version: 1.0
Author URI: lochp.wordpress
*/

function hello_plugin(){
    $hello = "Hello 
    Plugin!
    !!!
    From
    Loc";
    $hello = explode("\n", $hello);
    return $hello;
}

function hello(){
    $chosen = hello_plugin();
    echo "<h1>Hello</h1>";
}

add_action('admin_notices', "hello");

function hello_css(){
    $x = is_rtl() ? 'left' : 'right';
    
        echo "
        <style type='text/css'>
        #dolly {
            float: $x;
            padding-$x: 15px;
            padding-top: 5px;		
            margin: 0;
            font-size: 11px;
        }
        </style>
        ";
}

add_action('admin_head', 'hello_css');