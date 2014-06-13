<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function input()
	{
		$data['ViewTitle'] = _lang('qu_index');
		$this->load->view('input_view', $data);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */