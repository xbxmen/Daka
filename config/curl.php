<?php
	/*
	 测试 用例
	 * */
	define('BASEURL', 'http://202.194.15.33:21043');
	$password = md5('960105');
	$data = "j_username=201400301203&j_password=960105";
	
	$log_url = BASEURL."/b/ajaxLogin";
	$log = curl_init();
	curl_setopt($log,CURLOPT_URL,$log_url);
	curl_setopt($log,CURLOPT_REFERER,"http://202.194.15.33:21043");
	curl_setopt($log,CURLOPT_POST, true);
	curl_setopt($log,CURLOPT_HEADER,0);
	curl_setopt($log,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($log,CURLOPT_POSTFIELDS,$data);
	
	/*存放 cookie*/
    curl_setopt ($log, CURLOPT_COOKIEJAR, 'D:/a.txt' ); // 存放Cookie信息的文件名称  
	curl_setopt ($log, CURLOPT_COOKIEFILE, "D:a.txt" ); // 读取上面所储存的Cookie信息  
  	curl_setopt ($log, CURLOPT_TIMEOUT, 30 ); // 设置超时限制防止死循环  
    curl_setopt ($log, CURLOPT_HEADER, 0 ); // 显示返回的Header区域内容  
	$return = curl_exec($log);
	curl_close($log);
	print_r($return);
	
	/*
	 * 获取 课程表
	 */
	$tree_url = BASEURL."/f/xk/xs/bxqkb";
	$tree = curl_init();
	curl_setopt($tree,CURLOPT_URL,$tree_url);
	curl_setopt($tree,CURLOPT_REFERER,"http://202.194.15.33:21043");
	curl_setopt($tree,CURLOPT_POST, true);
	curl_setopt($tree,CURLOPT_HEADER,0);
	curl_setopt($tree,CURLOPT_RETURNTRANSFER,true);
	/*存放 cookie*/
	curl_setopt ($tree, CURLOPT_COOKIEFILE, "D:a.txt" ); // 读取上面所储存的Cookie信息  
  	curl_setopt ($tree, CURLOPT_TIMEOUT, 30 ); // 设置超时限制防止死循环  
    curl_setopt ($tree, CURLOPT_HEADER, 0); // 显示返回的Header区域内容  
	$return = curl_exec($tree);
	curl_close($tree);
	echo substr($return,5100,14000);	
	
?>