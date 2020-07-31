<?php
class Frog {
    public $jump="hop hop";
    public function jump() {
        echo $this->jump;
    }
}
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
?>