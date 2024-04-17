<?php

namespace OurAutoLoadPlugin\Src;

class World {
    public  $name;

    public function __construct($name) {
        $this->name = $name;
        add_action('init', [ $this, 'world']);
    }
    public function world() {
        echo "World" . $this->name;
    }

}     

 