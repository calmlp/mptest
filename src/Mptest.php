<?php
namespace Calmlp\Mptest;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;

class Mptest
{
   
    /**
     * Mptest constructor.
     */
    public function __construct($config)
    {
        
    }
    
     
    public function calculation($a,$b){
    	return $a+$b;
    }

    public function hi($name){
    	return 'hi '.$name;
    }
}