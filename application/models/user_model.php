<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
  * Description 	Model used to handle data on table "qu_user"
  * Date 			Jun, 2014
  * Autor 			@xrgranados
  */
class User_Model extends MY_Model {

	public $_table = TBL_USER;
	public $primary_key = USER_ID;

	public function __construct() {

		parent::__construct();

		// load_constant_file('table');
		// load_constant_file('catalog');

	}

	/**
	  * Insert 	new users
	  * @param 	unknown_type $role_name
	  * Date 	Jun, 2014
	  * Autor 	@xrgranados
	  */

	public function create_registred($data_post){

		$data = array(

			USER_FIRST_NAME				=> $data_post['first_name'],
			USER_LAST_NAME				=> $data_post['last_name'],
			USER_EMAIL					=> $data_post['email'],
			USER_ROLE 					=> REGISTRED,

		);

		$id = $this->users->insert($data);

		return $id;

	}

}

/* End of file user_model.php */
/* Location: ./application/models/backend/user_model.php */