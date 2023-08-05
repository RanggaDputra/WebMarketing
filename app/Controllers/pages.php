<?php

namespace App\Controllers;

use App\Models\adminModel;

class pages extends BaseController
{
	protected $adminModel;
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
	}
	public function home()
	{
		$data = [
			'title' => 'Home'
		];
		return view('pages/home', $data);
	}
	public function bantuan()
	{
		$data = [
			'title' => 'Bantuan'
		];

		return view('pages/bantuan', $data);
	}

	public function AddOn()
	{
		$data = [
			'title' => 'AddOn'
		];
		return view('pages/AddOn', $data);
	}
	public function infop()
	{
		$data = [
			'title' => 'Info'
		];
		return view('pages/infop', $data);
	}
	public function internet()
	{
		$data = [
			'title' => 'Internet'
		];
		return view('pages/internet', $data);
	}
	public function paket()
	{
		$data = [
			'title' => 'Paket'
		];
		return view('pages/paket', $data);
	}
	public function login()
	{
		$data = [
			'title' => 'login'
		];
		return view('pages/login', $data);
	}
	public function register()
	{
		$data = [
			'title' => 'register'
		];
		return view('pages/Register', $data);
	}
	public function index()
	{

		$data = [
			'title' => 'Profile'
		];
		return view('pages/index', $data);
	}
	public function ppaket()
	{
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$validate = $this->validation->run($data, 'user');
			$errors = $this->validation->getErrors();

			if (!$errors) {
				$userModel = new \App\Models\adminModel();

				$user = new \App\Entities\User();

				$user->fill($data);

				$user->role = 1;
				$user->gmbrktp = $this->request->getFile('gmbrktp');
				$user->gmbr = $this->request->getFile('gmbr');
				$user->selfie = $this->request->getFile('selfie');
				$user->created_by = 0;
				$user->date_created = date("Y-m-d H:i:s");

				$userModel->save($user);

				$id = $userModel->insertID();

				$segments = ['user', 'index'];

				$this->session->setFlashdata('success', 'Input Data Berhasil');

				return redirect()->to(base_url('pages/confirm'));
			}
			$this->session->setFlashdata('errors', $errors);
		}
		$data = [
			'title' => 'paket'
		];
		return view('pages/ppaket', $data);
	}
	public function hubungi()
	{
		$data = [
			'title' => 'hubungi'
		];
		return view('pages/hubungi', $data);
	}
	public function save()
	{
		// // $adminModel = new adminModel();
		// $admin = $this->adminModel->findAll();
		// $data = [
		// 	'admin' => $admin
		// ];
		// return view('admin/index2', $data);

	}
	public function confirm()
	{
		return view('pages/confirm');
	}
	public function cetak()
	{
		return view('pages/cetak');
	}
	public function dev() {
	return view('pages/dev');
}
}
