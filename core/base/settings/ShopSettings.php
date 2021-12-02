<?php

namespace core\base\settings;

use core\base\settings\Settings;
class ShopSettings
{
    static private $_instance;
    private $baseSettings;

    private $templateArr = [
        'text' => ['price', 'short'],
        'textarea' => ['goods_content']
    ];

    static public function get($property){
        return self::instance()->$property;
    }

    static public function instance(){
        if(self::$_instance instanceof self){
            return self::$_instance;
        }

        self::$_instance->baseSettings = Settings::instance(); // 5 vidos 44:41
        return self::$_instance = new self;
    }

    private function __construct(){

    }

    private function __clone(){

    }
}