# 简单介绍

- 本组件使用@stream_socket_client与redis server通信，因此不需要安装php redis扩展；
- 本组件使用简单，代码仿照YII2 redis组件；

# 安装教程
    composer require changchang700/redis

运行上面命令安装组件

# 使用教程
在需要引用的地方引入

	use Component\Redis\Redis;
	
在文件内实例化

	$redis = new Redis("127.0.0.1",6379);
	$data = $redis->set('ddddd',"wwwwwwwwwww");
	var_dump($redis->get("ddddd"));exit;