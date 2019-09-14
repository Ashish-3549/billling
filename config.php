<?php
/*
	$config is array to hold global configuration for whole application
	@operating_mode is used in accessing URLs of production and test servers
		values:- test|production
	@billing_mode is used in accessing URLs of production and test servers
		values:- local|cloud
*/

global $config;
$config['operating_mode'] = 'production';
$config['billing_mode'] = 'local';
$config['printing_mode'] = 'other';
$config['till_no'] = '1';
$config['version'] = '5.7';  /* Update on 2017-07-18 */

/*
	Operation Mode test Local Details
*/
$config['test_cd_local_protocol'] = 'http';
$config['test_cd_local_url'] = 'localhost';
$config['test_cd_local_port'] = '5984';
$config['test_cd_local_db'] = 'sharkpos';
$config['test_cd_local_username'] = 'admin';
$config['test_cd_local_password'] = 'admin^!';
/*
	Operation Mode test HO Details
*/
$config['test_cd_remote_protocol'] = 'http';
$config['test_cd_remote_url'] = 'testcpos.chaipoint.com';
$config['test_cd_remote_port'] = '5984';
$config['test_cd_remote_db'] = 'sharkho';
$config['test_cd_remote_master_db'] = 'sharkmaster';
$config['test_cd_remote_push_db'] = 'sharkpush';
$config['test_cd_remote_cashback_db'] = 'sharkcashback';
$config['test_cd_remote_username'] = 'admin';
$config['test_cd_remote_password'] = 'admin^!';

/*
	Operation Mode Production Local Details
*/
$config['production_cd_local_protocol'] = 'http';
$config['production_cd_local_url'] = 'localhost';
$config['production_cd_local_port'] = '5984';
$config['production_cd_local_db'] = 'dlf_sharkpos';
$config['production_cd_local_username'] = 'admin';
$config['production_cd_local_password'] = 'admin^!';
/*
	Operation Mode Production HO Details
*/
$config['production_cd_remote_protocol'] = 'http';
$config['production_cd_remote_url'] = 'sharkho.chaipoint.com';
$config['production_cd_remote_port'] = '5984';
$config['production_cd_remote_db'] = 'sharkho';
$config['production_cd_remote_push_db'] = 'sharkpush';
$config['production_cd_remote_master_db'] = 'sharkmaster';
$config['production_cd_remote_cashback_db'] = 'sharkcashback';
$config['production_cd_remote_username'] = 'admin';
$config['production_cd_remote_password'] = 'admin^!';


/*@ pos_configure_type is used to check for whom POS is configured.
		possible values:- walkin|event */

$config["pos_configure_type"] = "walkin";

#ENABLING CHANGE STATUS THROUGH ORDERNOW API
$config['enable_order_now'] = 0;
$config['enable_order_now_store_transfer'] = 0;

#Test credentials for order now api
$config['test_order_now_protocol'] = "http";
$config['test_order_now_url'] = "52.66.12.73:9090/order/v2/api/";
$config['test_order_now_username'] = "testUser";
$config['test_order_now_password'] = "testPassword";

#Production credentials for order now api
$config['production_order_now_protocol'] = "https";
$config['production_order_now_url'] = "ordernow.chaipoint.com/order/v2/api/";
$config['production_order_now_username'] = "sharkUser";
$config['production_order_now_password'] = "sharkPassword";
