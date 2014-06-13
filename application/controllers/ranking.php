<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ranking extends CI_Controller {

	/**
	 * Controller for Ranking page.
	 *
	 */

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['ViewTitle'] = _lang('qu_ranking_page_title');
		$this->load->view('ranking_view', $data);
	}

}

/* End of file ranking.php */
/* Location: ./application/controllers/ranking.php */