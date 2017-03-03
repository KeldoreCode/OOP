<?php

class Galerie {
    
    private $slozka;
    private $sloupcu;
    private $soubory = array();
    
    public function __construct($slozka, $sloupcu) {
        $this->sloupcu = $sloupcu;
        $this->slozka = $slozka;
    }
    
    public function nacti(){
        $slozka = dir($this->slozka);
        
        while ($polozka = $slozka->read()) { 
            if (strpos($polozka, '_thumb')) {
                $this->soubory[] = $polozka;
            }
        }
        $slozka->close();
    }
    
    public function vypis() {
        echo('<table id="galerie"><tr>');
        $sloupec = 0;
        foreach ($this->soubory as $soubor)
        {
            $nahled = $this->slozka . '/' . $soubor;
            $obrazek = $this->slozka . '/' . str_replace('_thumb', '', $soubor);
            echo ('<td><a href="' .  htmlspecialchars($obrazek) . '"><img src="' .  htmlspecialchars($nahled) . '" width = "200px" height= "300px" alt=""></a></td>');
            $sloupec++;
            if ($sloupec >= $this->sloupcu) {
                echo ('</tr><tr>');
                $sloupec = 0;
                
            }
        }
        echo ('</tr></table>');
    }
    
    
}
