<?php
class Dashboard extends Controller
{
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this->view('Dashboard/layout/header', $data);
		$this->view('Dashboard/index');
		$this->view('Dashboard/layout/footer');
	}
}
