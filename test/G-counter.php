<?php
//分布式计数器
class Counter{
    public $countArray=[];
    public $mergeCount=0;
    public function  increment($number){
        array_push($this->countArray,$number);
    }

    public function merge($a,$b){
        foreach($a as $v){
            $this->mergeCount +=$v;
        }

        foreach($b as $v){
            $this->mergeCount +=$v;
        }

        return $this->mergeCount;
    }

    public function getCountArray(){
        return $this->countArray;
    }
}


$nodeA=new Counter();


$nodeB=new Counter();

$nodeA->increment(1);
$nodeB->increment(3);


$count=$nodeA->merge($nodeA->getCountArray(),$nodeB->getCountArray());

var_dump($nodeA->getCountArray());

var_dump($nodeB->getCountArray());

var_dump($count);