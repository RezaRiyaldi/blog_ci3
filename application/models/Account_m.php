<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_m extends CI_Model {
	public function login($input)
	{
		$response = create_response();

		$account = $this->db->where('username', $input->username)
							->get('account');

		if ($account->num_rows() > 0) {
			$user = $account->row_array();
			if(password_verify($input->password, $user['password'])) {
				$data = [
					'username' => $user['username'],
					'name' => $user['name'],
					'role' => $user['role']
				];

				$this->session->set_userdata($data);
				$response->type_message = 'success';
				$response->message = 'Success Login!';
				$response->success = TRUE;
			} else {
				$response->type_message = 'error';
				$response->message = 'Password invalid';
			}
		} else {
			$response->type_message = 'error';
			$response->message = 'Account not found';
		}

		return $response;
	}

	public function add_account($input)
	{
		$response = create_response();
		
		$account = $this->check_account($input->username);
		if ($account < 1) {
			$data_account = [
				'username' => $input->username,
				'name' => ucwords(strtolower($input->name)),
				'password' =>password_hash($input->password, PASSWORD_DEFAULT),
				'role' => $input->role
			];

			$this->db->insert('account', $data_account);
			$response->type_message = "success";
			$response->message = "SUCCESS. Register new account!";
			$response->success = TRUE;
		} else {
			$response->type_message = "error";
			$response->message = "FAILED. Account already registered!";
		}
		
		return $response;		
	}

	private function check_account($username)
	{
		return $this->db->get_where('account', ['username' => $username])->num_rows();
	}

	public function get_accounts()
	{
		$this->db->where('role', 'author');
		return $this->db->get('account')->result();
	}

	public function get_account_row($username)
	{
		$this->db->where('username', $username);
		return $this->db->get('account')->row();
	}

	public function edit_account($input)
	{
		$response = create_response();
		
		$account = $this->check_account($input->username);
		if ($account > 0) {
			$data_account = [
				'name' => ucwords(strtolower($input->name)),
				'password' =>password_hash($input->password, PASSWORD_DEFAULT),
				'role' => $input->role
			];

			$this->db->where('username', $input->username);
			$this->db->update('account', $data_account);
			
			$response->type_message = "success";
			$response->message = "SUCCESS. Edit account!";
			$response->success = TRUE;
		} else {
			$response->type_message = "error";
			$response->message = "FAILED. Account Not found!";
		}
		
		return $response;	
	}

	public function delete_author($username)
	{
		$response = create_response();
		$this->db->delete('account', ['username' => $username]);
		$response->type_message = 'success';
		$response->message = 'Success to delete author';
		return $response;

	}
}
