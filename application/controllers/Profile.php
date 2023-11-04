<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

        $this->load->model('Profile_model', 'profile');
    }
	
	public function index()
	{
		$data['profile'] = $this->profile->getProfile();
		$this->load->view('profile/index', $data);
	}

	public function addView()
	{
		$this->load->view('profile/add');
	}

	public function add()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
		];

		$this->profile->create($data);
		redirect('profile');
	}

	public function editView($id_profil)
	{
		$data['detail'] = $this->profile->get_detail_profil($id_profil);
		$this->load->view('profile/edit', $data);
	}

	public function edit()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat')
		);
	
		$id = $this->input->post('id_profile');
	
		$this->profile->update($id, $data); // Ganti dengan metode sesuai dengan model Anda
	
		redirect('profile');
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->profile->delete($id)) {
            redirect(site_url('profile'));
        }
    }
}