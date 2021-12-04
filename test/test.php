
<?php
class Message{
    public $id;     //事件唯一id， 发送一次递增一次
    public $time;   //系统毫秒时间戳
    public $msg;    //发生消息内容
    public $nodeId; //节点id
    public $hostId; //主机id
    public $lastId; //因果关系事件id,为0代表没有因果关系
}





//事件没有因果关系时，比较系统时钟
function compareClock(array $a, array $b){
    $dist = $a['time'] - $b['time'];

    if($dist==0) {
        $dist = compareId((int)$a['id'], (int)$b['id']); 
    }

    return $dist;
}

//系统时钟一致时,比较事件id
function compareId(int $aId, int $bId) {
    //b事件在前   b>a
   if(($aId-$bId)>0){
       return $dist;
   }

    //a事件在前  a>b
    if(($bId-$aId)>0){
        return $dist;
    }
    //无法判断谁在前，last win 或者frist win 
    return $aId;
}



$a
