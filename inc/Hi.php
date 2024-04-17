<?php

namespace OurAutoLoadPlugin\Inc;

class Hi {
    public  $name;

    public function __construct($name) {
        $this->name = $name;
        add_action('init', [ $this, 'hi']);
    }
    public function hi() {
        echo "Hi" . $this->name;
    }

}     

 