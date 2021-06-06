<?php 
/**
 * SHOP CLASS
 */
class Shop {
    //ATTRIBUTI/PROPRIETA'
    public $id;
    public $name;
    public $size;
    public $typology;
    public $price;
    public $description;
    


    //COSTRUTTORE
    function __construct($_id, $_name, $_size, $_typology, $_price, $_description) {
        $this->id = $_id;
        $this->name = $_name;
        $this->size =$_size;
        $this->typology = $_typology;
        $this->price = $_price;
        $this->description = $_description;
    }



    //METODI
    
    //estratto
    public function getExcerpt() {
        $sub = substr($this->description, 0, 20); //cosa voglio vedere, da dove parto e quanti caratteri max
        return $sub;
    }
}



/**
 * DRESSES CLASS (SHOP'S CHILD)
 */
class Dresses extends Shop {
    //ATTRIBUTI/PROPRIETA'
    public $brand;
    public $style;
    public $ethic;

    


    //COSTRUTTORE
    function __construct($_id, $_name, $_size, $_typology, $_price, $_description, $_brand, $_style, $_ethic) {
        parent::__construct($_id, $_name, $_size, $_typology, $_price, $_description);
        
        $this->brand = $_brand;
        $this->style = $_style;
        $this->ethic =$_ethic;
    }
    
    //Get Data
    public function getDressInfo() {
        return 'ID: ' . $this->id . '<br> Taglia: ' . $this->size .
        '<br> Tipologia: ' . $this->typology . '<br> Prezzo: ' .
        $this->price . '€ ' . '<br> Descrizione: ' . $this->description . '<br> Brand: '
        . $this->brand . '<br> Stile: ' . $this->style . 'Etico: ' . $this->ethic . '<br>';
    }
}



/**
 * SWIMWEAR CLASS (SHOP'S CHILD)
 */
class Swimwear extends Shop {
    //ATTRIBUTI/PROPRIETA'
    public $color;
    public $type;

    


    //COSTRUTTORE
    function __construct($_id, $_name, $_size, $_typology, $_price, $_description, $_color, $_type) {
        parent::__construct($_id, $_name, $_size, $_typology, $_price, $_description);
        
        $this->color = $_color;
        $this->type = $_type;
    }
    
    //Get Data
    public function getSwimwearInfo() {
        return 'ID: ' . $this->id . '<br> Taglia: ' . $this->size .
        '<br> Tipologia: ' . $this->typology . '<br> Prezzo: ' .
        $this->price . '€ ' . '<br> Descrizione: ' . $this->description . '<br> Colore: '
        . $this->color . '<br> Tipo: ' . $this->type . '<br>';
    }
}

?>