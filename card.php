<?php

class card{

    public $name;
    public $surname;
    public $numberCard;
    public $cardExpiration;

    function __construct($_name, $_surname, $_numberCard, $_cardExpiration)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->numberCard = $numberCard;
        $this->cardExpiration = $cardExpiration;
    }

} 

?>