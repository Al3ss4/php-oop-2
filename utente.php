<?php

class utent {
    public $email;
    public $card;


function __construct($_name, $_surname, $_email, $_card = [])
{
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->card = $_card;
}
}
?>