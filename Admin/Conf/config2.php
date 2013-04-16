<?php
$bae_config= require './Admin/Conf/config_bae.php';
$config=array( 
	'URL_CASE_INSENSITIVE'=> true,
	'BUCKET_PREFIX'=>'myblog-',
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'127.0.0.1',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_NAME'=>'mystage',
	'DB_PREFIX'=>'mystage_'
);
return $config;
//return array_merge($bae_config,$config);
?>