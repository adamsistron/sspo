<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sesion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function _output($output = null)
	{
                $this->load->view('sesion.php',$output);
	}
	public function login()
	{
		$output = $this->grocery_crud->render();

		$this->_output($output);
	}
	public function logout()
	{
		$output = $this->grocery_crud->render();

		$this->_output($output);
	}

	public function index()
	{
		$this->_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

}
