<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
  * Description 	Constants for table "qu_user"
  * Date 			May, 2014
  * Autor 			@xrgranados
  */

if (!defined('TBL_USER')) {

	define('TBL_USER', 'cg_user');

	define('USER_ID', 'us_id');
	define('USER_FIRST_NAME', 'us_first_name');
	define('USER_LAST_NAME', 'us_last_name');
	define('USER_USERNAME', 'us_username');
	define('USER_EMAIL', 'us_email');
	define('USER_PASSWORD', 'us_password');
	define('USER_DATE_PASSWORD_MODIFIED', 'us_date_password_modified');
	define('USER_STATUS', 'us_status');
	define('USER_ROLE', 'us_role');
	define('USER_USER_CREATED', 'us_user_created');
	define('USER_DATE_CREATED', 'us_date_created');
	define('USER_USER_MODIFIED', 'us_user_modified');
	define('USER_DATE_MODIFIED', 'us_date_modified');
	define('USER_REGISTRED_CODE', 'us_registred_code');
	define('USER_REGISTRED_PHONE', 'us_registred_phone');

}

/* End of file user.php */
/* Location: ./application/config/db_constants/user.php */
