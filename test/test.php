<?php
use Component\Redis\Redis;

$redis = new Redis("127.0.0.1",6379);
$data = $redis->set('ddddd',"wwwwwwwwwww");
var_dump($redis->get("ddddd"));exit;