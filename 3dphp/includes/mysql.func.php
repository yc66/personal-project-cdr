<?php 




if(!defined('IN_TG')){
  exit('Access Defined!');
}

function _connect(){
	global $coon;
	if(!$coon = mysql_connect(DB_HOST,DB_USER,DB_PWD)){
		exit('数据库连接失败');
	}
}
function _select_db(){
	if(!mysql_select_db(DB_NAME)){
		exit('找不到指定数据库');
	}
}
function _set_names(){
	if(!mysql_query('SET NAMES UTF8')){
		exit('字符集设置错误');
	}
}

//验证重复用户名调用函数
function _query($_sql){
  if(!$_result = mysql_query($_sql)){
    exit('SQL执行失败'.mysql_error());
  }
  return $_result;
}
//_fetch_array只能指定数据集的一条数据
function _fetch_array($_sql){
  return mysql_fetch_array(_query($_sql),MYSQL_ASSOC);
}

//返回值指定数据集
function _fetch_array_list($_result) {
	return mysql_fetch_array($_result,MYSQL_ASSOC);
}
//返回指定数据集
//关闭结果集
function _free_result($_result){
  mysql_free_result($_result);
}
//关闭结果集
//返回影响到的记录是 用与激活
function _affected_rows(){
  return mysql_affected_rows();
}
//返回影响到的记录是 用与激活

//关闭数据库
function _close(){
  if(!mysql_close()){
    exit('关闭失败');
  }
}
?>