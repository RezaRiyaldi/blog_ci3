<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post_m', 'post');
	}

	public function index()
	{
		$posts = $this->post->get_posts();
		$data = [
			'title' => 'Home',
			'content' => 'home',
			'posts' => $posts
		];

		$this->load->view('layouts/wrapper', $data);
	}

	public function v_add_post()
	{
		if ($this->session->name == '') {
			redirect('login');
		}

		$data = [
			'title' => 'Add Post',
			'content' => 'post/v_add_post'
		];

		$this->load->view('layouts/wrapper', $data);
	}

	public function validation_add_post()
	{
		$input = (object) $this->input->post();
		$check = $this->post->add_post($input);

		$this->session->set_flashdata($check->type_message, $check->message);

		if ($check->success) {
			// redirect('home');
			redirect('/');
		} else {
			redirect('post');
		}
	}

	public function v_detail_post($id)
	{
		$post = $this->post->get_post_row($id);
		$data = [
			'title' => $post->title,
			'content' => 'post/v_detail_post',
			'post' => $post
		];

		$this->load->view('layouts/wrapper', $data);
	}

	public function v_post_manage()
	{
		if ($this->session->name == '') {
			redirect('login');
		}

		$posts = $this->post->get_post_auth();
		$data = [
			'title' => 'Post Manage',
			'content' => 'post/v_post_manage',
			'posts' => $posts
		];

		$this->load->view('layouts/wrapper', $data);
	}

	public function v_edit_post($id)
	{
		$post = $this->post->get_post_row($id);
		$data = [
			'title' => 'Edit Post',
			'content' => 'post/v_edit_post',
			'post' => $post
		];

		$this->load->view('layouts/wrapper', $data);
	}

	public function validation_edit_post($id)
	{
		$input = (object) $this->input->post();
		$check = $this->post->edit_post($id, $input);

		$this->session->set_flashdata($check->type_message, $check->message);

		redirect('post/post_manage');
	}

	public function delete_post($id)
	{
		$check = $this->post->delete_post($id);
		$this->session->set_flashdata($check->type_message, $check->message);

		redirect('post/post_manage');
	}
}
