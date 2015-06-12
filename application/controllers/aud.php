<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aud extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('aud_model');
	}

	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function add()
	{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'required');

		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('header');
			$this->load->view('addlist');
			$this->load->view('footer');
		}
		else
		{
			if($this->input->post('submit'))
			{
				$this->aud_model->insertdata();
				redirect('aud/add');
			}
		}
	}

	public function view($user_id)
	{
		$result=$this->aud_model->get_data($user_id);
		if($result)
		{
			$data['row']=$result;
			$this->load->view('header');
			$this->load->view('single',$data);
			$this->load->view('footer');
		}
	}

	public function listing()
	{
		$data['query']=$this->aud_model->select();
		
		$this->load->view('header');
		$this->load->view('list',$data);
		$this->load->view('footer');
		
	}



}
