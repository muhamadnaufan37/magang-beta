<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dev extends CI_Controller {

	public function index()
	{
		$this->load->view('portfolio/template/header');
		$this->load->view('portfolio/index');
		$this->load->view('portfolio/template/footer');
	}

	public function about()
	{
		$this->load->view('portfolio/template/header');
		$this->load->view('portfolio/about');
		$this->load->view('portfolio/template/footer');
	}

	public function blogpost()
	{
		$this->load->view('portfolio/template/header');
		$this->load->view('portfolio/blogpost');
		$this->load->view('portfolio/template/footer');
	}

	public function contact()
	{
		$this->load->view('portfolio/template/header');
		$this->load->view('portfolio/contact');
		$this->load->view('portfolio/template/footer');
	}

	public function portfolio()
	{
		$this->load->view('portfolio/template/header');
		$this->load->view('portfolio/portfolio');
		$this->load->view('portfolio/template/footer');
	}
}
