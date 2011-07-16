<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StrategyContext
 *
 * @author Cem
 */
class Model_Strategy_StrategyContext {
    
    private $_sorter;
    
    public function __construct($context){
        switch ($context) {
            case 'quick':
                $this->_sorter = new Model_Strategy_QuickSort();
                break;
            
            case 'bubble':
                $this->_sorter = new Model_Strategy_BubbleSort();
                break;
            
            case 'insertion':
                $this->_sorter = new Model_Strategy_InsertionSort();
                break;

            default:
                $this->_sorter = new Model_Strategy_QuickSort();
                break;
        }
    }
    
    public function sort($array){
        return $this->_sorter->sort($array);
    }
    
}

?>
