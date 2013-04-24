<?php
return array(
	'URL_MODEL'=>3, 
	'BUCKET_PREFIX'=>'mystage-',
	'DB_TYPE'=>'mysql',
	'URL_HTML_SUFFIX'=>'.tyc',
	'DB_HOST'=>HTTP_BAE_ENV_ADDR_SQL_IP,
	'DB_USER'=>HTTP_BAE_ENV_AK,
	'DB_PWD'=>HTTP_BAE_ENV_SK,
	'DB_PORT'=> HTTP_BAE_ENV_ADDR_SQL_PORT, // 端口
	'DB_NAME'=>'abLhRULROzIeQGBVHFSM',
	'DB_PREFIX'=>'mystage_',
	'TMPL_PARSE_STRING'=>array(
	// __PUBLIC__/upload --> /Public/upload -->http://appname-public.stor.sinaapp.com/upload 
	'/Public/upload'=>file_domain('mystage-public').'/Uploads'
	)
	);
?>