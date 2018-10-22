<?php
/* Déclaration de la class Charactere */
class Charactere {
    /* Déclaration des attributs privé health mana et charac*/
    private $health = 0;
    private $mana = 0;
    private $charac = '';

    /* Déclaration des methodes publique construct, destruct et chat */
    public function construct();

    public function destruct();

    public function chat($charac) {
    }

}

?>