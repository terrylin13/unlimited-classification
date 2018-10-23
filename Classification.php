<?php
namespace app;

use app\ConnectDB;

/**
 * 无限级分类
 */
class Classification
{
	//输出
	public static function output(ConnectDB $db)
	{
		$queryData = $db->fetchAll();
		return self::_generateTree($queryData);
	}

	//处理分类之间的关系
	private static function _generateTree ($data,$pid = 0)
	{
		$tree = []; 
        if ($data && is_array($data)) { 
            foreach($data as $v) { 
                if($v['parent_id'] == $pid) { 
                    $tree[] = [ 
                        'id' => $v['id'], 
                        'name' => $v['name'], 
                        'parent_id' => $v['parent_id'], 
                        'children' => self::_generateTree($data, $v['id']), 
                    ];
                } 
            } 
        } 
        return $tree; 
	}

}