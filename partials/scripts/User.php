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
    //(in base alla date_entry: lo shop è aperto dal 2016 e lo sconto si applica se l'utente è iscritto da almeno 3 anni)
    //(in base alla year_of_birth: lo sconto si applica se l'utente si ha tra i 18 e i 25 anni)
    //(in base alla date_entry e year_of_birth)
    //(in base alla phone_number: lo sconto si applica se l'utente ha fornito il proprio numero di telefono)
    //(in base alla date_entry, year_of_birth e phone_number)
    public function getDiscount() {
        if ($this->date_entry = 2016 || $this->date_entry = 2017 || $this->date_entry = 2018) {
            return $this->discount = 30 . '% di sconto';
        }
        elseif ($this->year_of_birth >=1996 && $this->year_of_birth <=2003) {
            return $this->discount = 20 . '% di sconto';
        }
        elseif (($this->date_entry = 2016 || $this->date_entry = 2017 || $this->date_entry = 2018) && ($this->year_of_birth >=1996 && $this->year_of_birth <=2003)) {
            return $this->discount = 40 . '% di sconto';
        }
        elseif ($this->phone_number) {
            return $this->discount = 10 . '% di sconto';
        }
        elseif (($this->date_entry = 2016 || $this->date_entry = 2017 || $this->date_entry = 2018) && ($this->year_of_birth >=1996 && $this->year_of_birth <=2003) && ($this->phone_number)){
            return $this->discount = 45 . '% di sconto';
        }
        else {
            return $this->discount = 0 . '% di sconto';
        }
    }
}
?>