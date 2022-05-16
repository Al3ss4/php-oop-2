<?php



class utent {
    
    public $name;
    public $surname;
    public $registered ;
    public $discount = 0;
    public $expiredCard;

    public $email;

function __construct($_name, $_surname, $_email, $_registered)
{
    $this->name = $_name;
    $this -> surname = $_surname;
    $this->email = $_email;
    $this->registered = $_registered;
}


public function validCard($expiredCard) {
    if (is_numeric($expiredCard) && $expiredCard <= 2022) {
        return
        $this-> expiredCard =  'La tua carta è valida!' ;
    } else {
        return $this -> expiredCard = ' La tua carta è scaduta!!';
    }
    
}
public function utentEmail($email) {
    $this->email = $email;
}

public function email() {
    return $this->email;
}

public function getDiscount() {
    if ($this->registered === false) {
        $this->discount = 0;
       
    }

    else $this->discount = 20;

   
}

}
?>