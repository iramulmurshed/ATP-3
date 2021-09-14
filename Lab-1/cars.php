<?php

class car{

    public   $engineNo;
    public $model;
    public $owner;


    function __construct($engineNo, $model, $owner)
    {
        $this->engineNo=$engineNo;
        $this->model=$model;
        $this->owner=$owner;
    }



    function showInfo(){

        echo"  {$this->engineNo} {$this->model} {$this->owner}  ";

    }


}

$c=new car("BX-50","408","Labib");
$c->showInfo();

?>