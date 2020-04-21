<?php
namespace Config;

class Config
{

    public function __construct(){
        $this->config = [
            'dbHost' => '127.0.0.1',
            'dbPort' => '3306',
            'dbName' => 'immobilier',
            'dbUser' =>  'root',
            'dbPassword' => ''
        ];
    }

    public function getConfig(){
        return $this->config;
    }
    
}