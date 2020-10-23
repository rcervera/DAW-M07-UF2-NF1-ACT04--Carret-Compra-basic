<?php
namespace DAWM07\shoppingCart;

class Item 
{
    private $id;
    private $name;
    private $quantity;
    private $price;

    // Activitat a realitzar dins aquest fitxer:
    // 1)  Afegir un atribut tipus data per saber la data en que s'ha afegit el producte al carret

    // 2) afegir exceptions quan la quantitat no sigui superior o igual a 1

    
    public function __construct($id, $name, $price, $quantity)
    {        
        $this->id = $id;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->name = $name;
       
    }
    
    public function getId()
    {        
        return $this->id;
    }

    public function getQuantity()
    {        
        return $this->quantity;
    }

    public function getPrice()
    {        
        return $this->price;
    }

    public function getName()
    {        
        return $this->name;
    }

    public function setId($value)
    {        
        $this->id = $value;
    }

    public function setPrice($value)
    {        
        $this->price = $value;
    }

    public function setName($value)
    {        
        $this->name = $value;
    }

    public function setQuantity($value)
    {   
        
        $this->quantity = $value;
    }      
}