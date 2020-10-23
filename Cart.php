<?php
namespace DAWM07\shoppingCart;
include 'Item.php';

class Cart 
{
    
    protected $items = array();    
    
    // Activitat a realitzar:
    // Implementar nou atribut iva i tipus moneda
    // Afegir també els getters-setters dels nous atributs
    
    
    public function __construct()
    {
         
    }


    public function __destruct() {
    	
    }

    public function getItems()
    {
        return $this->items;
    }
 

    /**
     * Afegeix o Actualitza un producte en el carret
     *      
     */
    public function add($id, $name, $price, $qty = 1.0)
    {        
        if(isset($this->items[$id])) {  // Producte ja està dins el carret
            $quantitat = $this->items[$id]->getQuantity();
            $quantitat += $qty;
			$this->items[$id]->setQuantity($quantitat); // incrementem quantitat			
		}
		else { // afegim nova posició
            $item = new Item($id,$name,$price,$qty);
            $this->items[$id] = $item;										
		}	
    }

    /**
     * Elimina el producte amb l'id especificat del carret 
     * 
     */
    public function remove($id)
    {
        if(isset($this->items[$id])) {
        	unset($this->items[$id]);
        }
        else throw new \Exception("Item no existent");
    }

    /**
     * Actualitza la quantitat del producte amb l'id especificat del carret 
     * 
     */
     public function update($id,$qty)
     {   
     	if(isset($this->items[$id])) {
			
            $this->items[$id]->setQuantity($qty);
		}
        else throw new Exception("Item no existent");
     }

     /**
      * Retorna si el carret està buit
      */
     public function isEmpty() 
     {
			if($this->count()==0) return true;
			else return false;
     }
     
     /**
      * Retorna el número d'elements que hi ha dins el carret
      */
     public function count() 
     {
		 return count($this->items);
	 }

      /**
      * Retorna l'element amb id especificat del carret 
      */
	
    public function getItem($id) {
        if(isset($this->items[$id])) {
            return $this->items[$id];
        }
        else throw new Exception("Item no existent");  
    }


    // Activitat a realitzar: 
    // Implementa els següents mètodes:
    /* Retorna la quantitat que s'ha de pagar segons els productes
    *  emmagatzemats al carret
    */
    public function getTotalPrice()
    {
        

    }

    /* Retorna la quantitat que s'ha de pagar segons els productes
    *  emmagatzemats al carret incloent IVA
    */
    public function getTaxTotalPrice()
    {
        
        

    }

}
?>
