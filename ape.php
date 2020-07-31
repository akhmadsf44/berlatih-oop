<?php
class Ape {
    public $yell="Auooo";
    public function yell() {
        echo $this->yell;
    }
}
// index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell() // "Auooo"
?>