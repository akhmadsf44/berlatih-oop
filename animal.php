<?php
class Animal {
    public $name="shaun<br>";
    public $legs="2<br>";
    public $cold_blooded="false";
    public function legs() {
        echo $this->legs;
    }
    public function name() {
        echo $this->name;
    }
    public function cold_blooded() {
        echo $this->cold_blooded;
    }
}
$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>