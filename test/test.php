
<?php
require 'redis.php';
$redis = new component\redis\Redis('127.0.0.1',6379);
$redis->set("test",'hello world');
echo $redis->get('test');