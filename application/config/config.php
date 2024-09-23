<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

$config['base_url'] = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])) . '/';

$config['index_page'] = '';


$config['uri_protocol']	= 'REQUEST_URI';

$config['url_suffix'] = '';


$config['language']	= 'english';

$config['charset'] = 'UTF-8';

$config['enable_hooks'] = FALSE;


$config['subclass_prefix'] = 'MY_';


$config['composer_autoload'] = FALSE;

$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

$config['allow_get_array'] = TRUE;

$config['log_threshold'] = 0;

$config['log_path'] = '';


$config['log_file_extension'] = '';

$config['log_file_permissions'] = 0644;

$config['log_date_format'] = 'Y-m-d H:i:s';

$config['error_views_path'] = '';

$config['cache_path'] = '';

$config['cache_query_string'] = FALSE;


$config['encryption_key'] = '';


$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;

$config['standardize_newlines'] = FALSE;


$config['global_xss_filtering'] = TRUE;

/* 
| -----------------------------------------------------------------
| CSRF config
| -----------------------------------------------------------------
| 当‘csrf_protection’设置为TRUE时，启用设置CSRF cookie令牌；
| token将在提交的表单时检查；
| 如果您正在接受用户数据，强烈建议启用CSRF保护；
*/
$config['csrf_protection'] = TRUE;  # CSRF保护已启用
$config['csrf_token_name'] = 'csrf_test_name';  # CSRF令牌名称
$config['csrf_cookie_name'] = 'csrf_cookie_name';   # CSRF cookie名称
$config['csrf_expire'] = 7200;  # CSRF令牌过期时间（以秒为单位）2小时
$config['csrf_regenerate'] = TRUE;  # CSRF令牌自动重新生成已启用
$config['csrf_exclude_uris'] = array(); # 忽略CSRF检查的URI数组

$config['compress_output'] = FALSE;

$config['time_reference'] = 'local';

$config['rewrite_short_tags'] = FALSE;

$config['proxy_ips'] = '';
