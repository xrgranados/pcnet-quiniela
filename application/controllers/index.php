<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['ViewTitle'] = _lang('qu_index');
		$this->load->view('index_view');
	}

	public function round()
	{
		$data['ViewTitle'] = _lang('qu_partidos');

		$this->load->view('round_view', $data);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */