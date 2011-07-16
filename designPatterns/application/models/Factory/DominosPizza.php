<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DominosPizza
 *
 * @author Cem
 */
class Model_Factory_DominosPizza implements Model_Factory_FoodInterface
{
    private $_name = 'Pizza';
    private $_calory = 2000;
    
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
    
    public function getName()
    {
        return $this->_calory;
    }
    
    
    
    
}

?>
