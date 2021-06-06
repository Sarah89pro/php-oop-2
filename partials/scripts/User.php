<?php 
/**
 * USER CLASS
 */
class User {
    //ATTRIBUTI/PROPRIETA'
    protected $name;
    protected $lastname;
    protected $year_of_birth;
    protected $date_entry;
    protected $address;
    private $password;
    protected $phone_number;
    protected $orders;
    protected $discount;



    //COSTRUTTORE
    function __construct($_name, $_lastname, $_year_of_birth, $_date_entry, $_address, $_phone_number, $_orders, $_discount) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->year_of_birth =$_year_of_birth;
        $this->date_entry = $_date_entry;
        $this->address = $_address;
        $this->phone_number = $_phone_number;
        $this->orders = $_orders;
        $this->discount = $_discount;
    }



    //METODI

    //Get basic Data from user
    public function getData() {
        return 'Nome e Cognome Utente: ' . $this->name . ' ' . $this->lastname .
        '<br> Anno di nascita: ' . $this->year_of_birth . '<br> Anno di iscrizione: ' .
        $this->date_entry . '<br> Numero di Telefono: ' . $this->phone_number . '<br> Ordini: '
        . $this->orders . $this->discount; //getdiscount è un metodo e va trattato come tale!
    }

    //Discount
    //(se l'utente è nato fra il 96 e il 2003 e ci ha dato il numero di telefono)
    //(se l'utente è nato fra il 96 e il 2003)
    //(se l'utente ci ha dato il numero di telefono)
    public function getDiscount() {
        
        if (($this->year_of_birth >=1996 && $this->year_of_birth <=2003) && ($this->phone_number)) {
            return $this->discount = 45 . '% di sconto';
        }
        elseif ($this->year_of_birth >=1996 && $this->year_of_birth <=2003){
            return $this->discount = 25 . '% di sconto';
        }
        elseif ($this->phone_number) {
            return $this->discount = 10 . '% di sconto';
        }
        else {
            return $this->discount = 0 . '% di sconto';
        }
    }
}
?>