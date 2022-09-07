<?php
class Landing extends Controller
{
	public function index()
	{
		$data['judul'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('LandingPage/index');
		$this->view('templates/footer');
	}

	public function about()
	{
		$data['judul'] = 'About';
		$this->view('templates/header', $data);
		$this->view('LandingPage/about');
		$this->view('templates/footer');
	}
}
