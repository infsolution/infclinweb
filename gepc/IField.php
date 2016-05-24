<?php
abstract class IField{
    protected $name;
    protected $size;
    protected $value;
    protected $editable;
    protected $tag;
    function __construct($name) {
        self::setEditable(true);
        self::setName($name);
        self::setSize(200);
        
        $style;
    }
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    function setSize($size){
        $this->size=$size;
    }
    function getSize(){
        return $this->size;
    }
    function setValue($value){
        $this->value=$value;
    }
     function getValue(){
         return $this->value;
    }
    function setEditable($editable){
        $this->editable=$editable;
    }
    function getEditable(){
        return $this->editable;
    }
    function setProperty($name, $value){
        $this->tag->$name=$value;
    }
     
}
