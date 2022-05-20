<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Post';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Account
$route['login'] = 'Account/v_login';
$route['logout'] = 'Account/logout';
$route['account/add'] = 'Account/v_add_account';
$route['account/author_manage'] = 'Account/v_author_manage'; 
$route['(:any)/author/delete'] = 'Account/delete_author/$1';
$route['(:any)/author/edit'] = 'Account/v_edit_author/$1';


// Post
$route['add_post'] = 'Post/v_add_post';
$route['(:any)/post'] = 'Post/v_detail_post/$1';
$route['post/post_manage'] = 'Post/v_post_manage';
$route['(:any)/post/delete'] = 'Post/delete_post/$1';
$route['(:any)/post/edit'] = 'Post/v_edit_post/$1';
