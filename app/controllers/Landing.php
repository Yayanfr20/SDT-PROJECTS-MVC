<?php
class Landing extends Controller
{
	public function index()
	{
		$data['judul'] = 'Home';
		$data['text'] = $this->model('TestDB')->getTextTesting();
		$this->view('templates/header', $data);
		$this->view('LandingPage/index', $data);
		$this->view('templates/footer');
	}
}
