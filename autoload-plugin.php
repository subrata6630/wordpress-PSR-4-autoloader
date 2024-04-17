<?php

/* * 
Plugin Name: PSR-4 Autoloader Wordpress pluging with composer
Plugin URI: https://example.com/plugins/the-basics/ 
Description: Handle the basics with this plugin. 
Version: 1.10.3
Author: Subrata Debnath
Author URI: https://subrata6630.github.io/

*/


namespace OurAutoLoadPlugin;

require_once __DIR__ . '/vendor/autoload.php';

    

    // PSR-4 Autoload

    class Our_Autoload_Plugin{
        public function __construct(){
            
            new Src\Hello("Hello");
            new Src\World("World");
            new Inc\Hi("Hi");

    }   

}

new Our_Autoload_Plugin;