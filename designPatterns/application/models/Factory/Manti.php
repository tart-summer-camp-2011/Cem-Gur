<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manti
 *
 * @author Cem
 */
class Model_Factory_Manti implements Model_Factory_FoodInterface
{ 
    private $_name = 'Manti';
    private $_calory = 500;
    
    public function setName($name)
    {
        $this->_name = $name;
    }
    
    public function getName()
    {
        return $this->_name;
    }
    
    public function setCalory($calory)
    {
        $this->_calory = $name;
    }
    
    public function getCalory()
    {
        return $this->_calory;
    }
}

?>
