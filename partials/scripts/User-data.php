<?php 

// Import classes
require_once __DIR__ . '/User.php';
/**
 * Sorgente Dati Utenti
 */
$user1 = new User('Francesca', 'Bianchi', 1998, 2020, 'Via Temistocle Calzecchi Onesti 121, Roma', 3333333333, 3, '');

$user2 = new User('Alessandra','Neri', 1989, 2018, 'Via Pavia 54, Milano', 3331111111, 2, '');

$user3 = new User('Lorena','Verdi', 1963, 2016, 'Piazza Carlo Ceretti 3, Salerno','', 4, '');

$user4 = new User('Margherita','Rossi', 2000, 2018, 'Via Gaetano Donizzetti 23, Cagliari', '', 2, '');


$users = [
    [
        'name' =>'Francesca',
        'lastname' =>'Bianchi',
        'year_of_birth' => 1998,
        'date_entry' => 2020,
        'address' =>'Via Temistocle Calzecchi Onesti 121, Roma',
        'phone_number' => 3333333333,
        'orders' => 3,
        'discount' => '',
    ],
    [
        'name' =>'Alessandra',
        'lastname' =>'Neri',
        'year_of_birth' => 1989,
        'date_entry' => 2018,
        'address' =>'Via Pavia 54, Milano',
        'phone_number' => 3331111111,
        'orders' => 2,
        'discount' => '',
    ],
    [
        'name' =>'Lorena',
        'lastname' =>'Verdi',
        'year_of_birth' => 1963,
        'date_entry' => 2016,
        'address' =>'Piazza Carlo Ceretti 3, Salerno',
        'phone_number' => '',
        'orders' => 4,
        'discount' => '',
    ],
    [
        'name' =>'Margherita',
        'lastname' =>'Rossi',
        'year_of_birth' => 2000,
        'date_entry' => 2018,
        'address' =>'Via Gaetano Donizzetti 23, Cagliari',
        'phone_number' => '',
        'orders' => 2,
        'discount' => '',
    ],
]; 

?>