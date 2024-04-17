<?php

namespace OurAutoLoadPlugin\Src;

class Hello {
    public  $name;

    public function __construct($name) {
        $this->name = $name;
        add_action('init', [ $this, 'hello']);
    }
    public function hello() {
        echo "Hello" . $this->name;
    }

}     

 