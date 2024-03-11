<?php
class City{
	public $name;
	
	public function __construct($name){
		$this->name= $name;
	}
}

class listData{
	public $listCity;
    public $nbcity=0;
    public $infectionnb;

    public function getAllCities(){
        $cities = array();
        foreach ($this->listCity as $key=>$value){
            if(!in_array($value->name,$cities)){
                $cities[]=$value->name;
            }
        }
        return $cities;
    }

    public function getCityIndex($name){
        foreach($this->listCity as $key=>$value){
            if($value->name == $name){
                return $key;
            }
        }
    }



}