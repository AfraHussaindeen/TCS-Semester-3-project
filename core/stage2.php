<?php

class Stage2 extends Stage{
    protected $id;
    public function __construct($id){
        $this->id=$id;
        parent::__construct();
    }

    public function next(){
        $date=date("Y-m-d");
        $this->lettersModel->insertDate('dateStage2',$date,$this->id);
        $this->lettersModel->updateStage($this->id,"Stage3");
    }
}