<?php
namespace OurAutoLoadPlugin\Src;


class World {
    public  $name;

    public function __construct($name) {
        $this->name = $name;

        add_action('init', [ $this, 'hello'] );
    }

    public function hello() {
        printf("<p>%s</p>", "I am from {$this->name}");
    }

}     