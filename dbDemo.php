<?php
require_once 'ConnectDB.php';

/**
 * DB连接接口实现类
 */
class dbDemo implements ConnectDB
{
	private $dbConnect = null;

	private $dbInfo = [
		'host'   => 'localhost',
		'port'   => '3306',
		'dbuser' => 'root',
		'pwd'    => 'DockerLNMP',
		'db'     => 't_blog'
	];

	public function __construct()
	{
		try 
		{
			if(empty($this->dbConnect))
			{
				$this->dbConnect = new PDO("mysql:host={$this->dbInfo['host']};port={$this->dbInfo['port']};dbname={$this->dbInfo['db']}", $this->dbInfo['dbuser'], $this->dbInfo['pwd']);
			}
		} catch (PDOException $e) {
			echo "\n mysql:host={$this->dbInfo['host']};port={$this->dbInfo['port']};dbname={$this->dbInfo['db']} \n";
		    echo "Error!: " , $e->getMessage() , "<br/>";
		    die();
		}
	}

	
	//查询分类结果
	public function fetchAll()
	{
		return $this->dbConnect->queryAll('SELECT * from category');
	}
}