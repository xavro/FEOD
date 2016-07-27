<?php

namespace UserBundle\Component\Logging;

use Monolog\Logger;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyLogging
 *
 * @author J.DEPOIS
 */
class MyLogging {
    
    private $logger;
    
    /**
     * 
     * @param \Monolog\Logger $logger l'objet premettant d'utiliser Monolog au sein du service
     */
    function __construct(Logger $logger) {
        $this->logger = $logger;
    }
    
    /**
     * 
     * @param type $message le texte a ecrire dans le log correspondant.
     */
    public function error($message){
        $this->logger->error($message);
    }
    
     public function debug($message){
        $this->logger->debug($message);
    }
    
     public function info($message){
        $this->logger->info($message);
    }

}
