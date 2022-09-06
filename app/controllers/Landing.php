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
}
