<?php
//passing by reference
function data_sanitize(&$item){
	return mysql_real_escape_string($item);
	}



function sanitize($data){
	return mysql_real_escape_string($data);
	}
	function output_errors($errors){
		return '<ul><li>'. implode('</li><li>',$errors) .'</li></ul>';}



?>