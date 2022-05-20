<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_m extends CI_Model {
	public function get_posts()
	{
		return $this->db->get('post')->result();
	}

	public function get_post_row($id)
	{
		return $this->db->get_where('post', ['idpost' => $id])->row();
	}

	public function get_post_auth()
	{
		$this->db->where('username', $this->session->username);
		return $this->db->get('post')->result();
	}

	public function add_post($input)
	{
		$response = create_response();
		
		$data = [
			'title' => ucwords(strtolower($input->title)),
			'content' => $input->content,
			'date' => date('Y-m-d H:i:s'),
			'username' => $this->session->username
		];

		$this->db->insert('post', $data);
		$response->type_message = 'success';
		$response->message = 'Success to add new Post';
		return $response;
	}

	public function edit_post($id, $input)
	{
		$response = create_response();
		$data = [
			'title' => ucwords(strtolower($input->title)),
			'content' => $input->content,
			'date' => date('Y-m-d H:i:s'),
			'username' => $this->session->username
		];

		$this->db->where('idpost', $id);
		$this->db->update('post', $data);
		$response->type_message = 'success';
		$response->message = 'Success to edit Post';
		return $response;
	}
	
	public function delete_post($id)
	{
		$response = create_response();
		$this->db->delete('post', ['idpost' => $id]);
		$response->type_message = 'success';
		$response->message = 'Success to delete Post';
		return $response;

	}
}
