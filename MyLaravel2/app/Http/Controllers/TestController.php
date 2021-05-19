<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// - definire classe User caratterizzata da nomeUtente, password
// - definire una funzione all'interno della classe User per ottenere una stringa
//   che rappresenti l'utente
// - all'interno del metodo del controller (home) istanziare un paio di oggetti
//   di tipo User (new User())
// - definire i relativi dati (username e password)
// - stampare risultati della getString() attraverso il dd

class User {
    public $username;
    public $password;
    public function __construct($username, $password = -1) {
        $this -> username = $username;
        $this -> password = $password;
    }

    public function getString() {
        return "User: " . $this -> username . " --> " . $this -> password;
    }
}

class TestController extends Controller
{
    $user1 = new User();
    $user1 -> username = "Deivhjpg";
    $user1 -> password = "kolkomoro";

    $user2 = new User();
    $user2 -> username = "Deivhjpg";
    $user2 -> password = "kolkomoro";

    $user1str = getString($user1);
    $user2str = getString($user2);
    dd($user1, $user2, $user1str, $user2str);

}
