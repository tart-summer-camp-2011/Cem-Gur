<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrySingleton
 *
 * @author Cem
 */
class Model_Registry_RegistrySingleton {
    
    private function __construct(){
        
    }
    
    private static $_instance = NULL;
    
    public static function getInstance(){
        if(self::$_instance == NULL){
            self::$_instance = new Model_Registry_RegistrySingleton();
        }
        return self::$_instance;
    }
    
    public function getMuzluSut(){
        echo 'muzlu sut';
    }
        
}

?>
