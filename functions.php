<?php
/*

*/
function dd($var)
{
	echo '<pre>';

	print_r($var);

	echo '</pre>';

}

function esc($string)
{
	return htmlentities($string, null, "UTF-8");
}

function esc_attr($string)
{
	return htmlentities($string, ENT_QUOTES, "UTF-8");
}

/*
* Get old value from array (eg post) for output to form
* @param String $field field name
* @param Array $post The array to get the field value from
* @return String The Field value
*/
function old($field,$post)
{
	if(isset($post[$field])) {
		return $post[$field];
	} else {
		return '';
	}
}

function error($field,$post)
{
	if(!empty($post[$field])) {
		return '<span><small class = "display_error">' . esc($post[$field]) . '</small></span>';
	} else {
		return '';
	}
}
