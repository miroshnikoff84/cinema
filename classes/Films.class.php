<?php

class Films{
    public $film = [];
    public function __construct(){
        $this->film = selectOne('films', ['id' => $_GET['id']]);
    }
    public function reset(){
        foreach ($this->film as &$value){
            $value = '';
        }
    }


}