<?php
function create_response()
{
	$response = new stdClass();
	$response->message = "Unknown";
	$response->type_message = "Unknown";
	$response->success = FALSE;

	return $response;
}
