<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function getfoodAction() {
        $food = Model_Factory_FoodFactory::sendFood(Model_Factory_FoodConstant::FOOD_MANTI);
        $this->view->assign("food",$food);
    }
    
    public function registryAction() {
        $registry = Model_Registry_RegistrySingleton::getInstance();
        $this-> view ->assign("registry",$registry);
    }
    
    public function coffeeAction() {
        $coffee = new Model_Decorator_SimpleCoffee();
        $coffeeMilk = new Model_Decorator_MilkDecorator($coffee);
        
        $this -> view -> assign("coffee", $coffee);
        $this -> view -> assign("coffeeMilk", $coffeeMilk);
    }
    
    public function sortAction() {
        $array = array(25, 14, 17, 125, 0, 9658);
        
        $sorting1 = new Model_Strategy_StrategyContext('quick');
        $result1 = $sorting1 -> sort($array);
        $this -> view -> assign("result1", $result1);
        
        $sorting2 = new Model_Strategy_StrategyContext('bubble');
        $result2 = $sorting2 -> sort($array);
        $this -> view -> assign("result2", $result1);
        
        $sorting3 = new Model_Strategy_StrategyContext('insertion');
        $result3 = $sorting3 -> sort($array);
        $this -> view -> assign("result3", $result1);
        
    }


}

