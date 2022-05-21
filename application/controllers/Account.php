<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Account_m', 'account');
	}

	public function v_login()
	{
		$data = [
			'login' => TRUE,
			'title' => 'Login',
			'content' => 'account/v_login'
		];

		$this->load->view('layouts/wrapper', $data);
	}


	public function logout()
	{
		$data = [
			'username' => '',
			'name' => '',
			'role' => ''
		];

		$this->session->unset_userdata($data);
		$this->session->sess_destroy();

		redirect('/');
	}
	public function validation_login()
	{
		$input = (object) $this->input->post();
		$check = $this->account->login($input);

		$this->session->set_flashdata($check->type_message, $check->message);
		if ($check->success) {
			// redirect('home');
			redirect('/');
		} else {
			redirect('login');
		}
	}

	public function v_add_account()
	{
		if ($this->session->name == '') {
			redirect('login');
		}

		$data = [
			'title' => 'Add Account',
			'content' => 'account/v_add'
		];
		$this->load->view('layouts/wrapper', $data);
	}

	public function validation_add()
	{
		$input = (object) $this->input->post();
		if ($input->password == $input->repassword) {
			$this->process_add($input);
		} else {
			$this->session->set_flashdata('error', 'Password not matches');
			redirect('account/add');
		}
	}

	private function process_add($input)
	{
		$check = $this->account->add_account($input);

		$this->session->set_flashdata($check->type_message, $check->message);

		redirect('account/author_manage');
	}

	public function v_author_manage()
	{
		if ($this->session->name == '') {
			redirect('login');
		}

		$authors = $this->account->get_accounts();
		$data = [
			'title' => 'Author Management',
			'content' => 'account/v_author_manage',
			'authors' => $authors
		];

		$this->load->view('layouts/wrapper', $data);
	}

	public function v_edit_author($username)
	{
		if ($this->session->name == '') {
			redirect('login');
		}

		$author = $this->account->get_account_row($username);
		$data = [
			'title' => 'Edit Author',
			'content' => 'account/v_edit_author',
			'author' => $author
		];

		$this->load->view('layouts/wrapper', $data);
	}

	public function validation_edit()
	{
		$input = (object) $this->input->post();
		if ($input->password == $input->repassword) {
			$this->process_edit($input);
		} else {
			$this->session->set_flashdata('error', 'Password not matches');
			redirect('account/add');
		}
	}

	private function process_edit($input)
	{
		$check = $this->account->edit_account($input);

		$this->session->set_flashdata($check->type_message, $check->message);

		redirect('account/author_manage');
	}

	public function delete_author($username)
	{
		$check = $this->account->delete_author($username);
		$this->session->set_flashdata($check->type_message, $check->message);

		redirect('account/author_manage');
	}
}
