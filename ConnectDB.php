<?php
namespace app;

/**
 * 定义一个数据库连接类接口
 */
interface ConnectDB {

	//连接一个数据库
	public function connect();
	
	//查询分类结果
	public function fetchAll();
	
}