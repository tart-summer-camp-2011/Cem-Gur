<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Muhallebi
 *
 * @author Cem
 */
class Model_Factory_Muhallebi implements Model_Factory_FoodInterface
{
    private $_name = 'Muhallebi';
    private $_calory = 400;
    
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
