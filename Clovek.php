<?php


class Clovek {
    
    public $jmeno;
    public $prijmeni;
    public $vek;
    private $unava = 0;
    
    public function __construct($jmeno, $prijmeni, $vek) {
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
        $this->vek = $vek;
    }
    
    public function spi($doba) {
        $this->unava -= $doba * 10;
        if ($this->unava < 0)
            $this->unava = 0;
    }
    
    public function behej($vzdalenost){
        if ($this->unava + $vzdalenost <= 20)
            $this->unava += $vzdalenost;
        else {
            echo 'Jsem příliš unavený.';
        }
    }


    public function pozdrav(){
        echo('Ahoj, já jsem ' . $this->jmeno);
    }
    
    public function __toString() {
        return $this->jmeno;
    }
    
    
    
    
}
