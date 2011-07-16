<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CaramelDecorator
 *
 * @author Cem
 */
class CaramelDecorator extends Model_Decorator_DecoratorAbstract {

    public function __construct(Model_Decorator_CoffeeInterface $coffee)
    {
        parent::__construct();
    }
    
    public function getCost()
    {
        return parent::getCost + 0.8;
        
    }
    
    public function getIngredients()
    {
        return parent::getIngredients . $this->_seperator . 'Caramel';
    }
}

?>
