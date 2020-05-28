<?php

namespace Capstone;

class Validator{
	/**
	 * Array to hold errors
	 * @var array
	 */
	private $errors = [];

	/**
	 * Set the labelling of the $field
	 * @param String $field
	 */
	private function label($field)
	{
		$label = str_replace('_',' ', $field);
		$label = ucwords($label);
		return $label;
	}

	/**
	 * Getter method for $errors property
	 * @return Array
	 */
	public function errors()
	{
		return $this->errors;
	}


	/**
	 * Set an error in the errors array
	 * @param String $field
	 * @param String $message
	 */
	private function setError($field, $message)
	{
		if(empty($this->errors[$field])) {
			$this->errors[$field] = $message;
		}
	}

	/**
	 * set the fieds as required
	 * @param String $field
	 * @param String $value
	 */
	public function requiredField($field, $value)
	{
		if(empty($value)){
			$this->setError($field, $this->label($field) . " is a required field.");
		}
	}

	public function stringValidate($field, $value)
	{
		$string_pattern = '/[a-zA-Z]+/';
		preg_match($string_pattern, $value, $matches);
		if(empty($matches)){
			$this->setError($field, $this->label($field) . " should only contain string value.");
		}
	}

	/**
	 * method to validate email field value
	 * @param String $field
	 * @param String $value
	 */
	public function emailValidate($field, $value)
	{
		if($value !== filter_var($value, FILTER_VALIDATE_EMAIL)) {
			$this->setError($field, $this->label($field) . " must be a valid email address.");
		}
	}

	/**
	 * set phone validation with regex
	 * @param String $field
	 * @param String $value
	 */
	public function phoneValidate($field, $value)
	{
		$phone_pattern = '/^([0-9]{3})[\-\s\.]?([0-9]{3})[\-\s\.]?([0-9]{4})$/';
		preg_match($phone_pattern, $value,$matches);
		if(empty($matches)){
				$this->setError($field, $this->label($field) . " should have a minimum length of 10 digits. Only numbers allowed");
			}
	}

	/**
	 * set postal validation regex
	 * @param String $field
	 * @param String $value
	 */
	public function postalValidate($field, $value)
	{
		$postal_pattern = '/^[a-zA-Z]{1}[0-9]{1}[a-zA-z]{1}[\s\.\-]?[0-9]{1}[a-zA-Z]{1}[0-9]{1}$/';
		if(!preg_match($postal_pattern, $value)) {
			$this->setError($field,  " must be a valid postal address.");
		}
	}

	/**
	 * set max length to field
	 * @param String $field
	 * @param String $value
	 */
	function maxLength($field, $value){
		if(strlen($value) > 255){
			$this->setError($field, $this->label($field) . ' should contain not more than 255 characters');
		} else {
			if(strlen($value) < 3) {
				$this->setError($field, $this->label($field) . ' should have minimum 3 characters');
			}
		}
	}

	/**
	 * set password validation with regex
	 * @param String $field
	 * @param String $value
	 */
	function passwordValidate($field, $value){
        $password_pattern = '/(?=.*[\!\@\#\$\%\^\&\*]+)(?=.*[\d]+)(?=.*[A-Z]+)(?=.*[a-z]+).{8,}/';
        preg_match($password_pattern, $value, $matches);
        if (empty($matches)){
            $this->setError($field, $this->label($field) . " shoud be 8 characters long with 1 lowercase letter, 1 uppercase letter, 1 special charater, 1 number.");
        }
    }

	/**
	 * chcek one field matches with another field
	 * @param String $field
	 * @param String $value
	 * @param String $field2
	 * @param String $value2
	 */
	public function confirmField($field, $value, $field2, $value2){
		if($value !== $value2) {
			$this->setError($field, $this->label($field) . " should match to " . $this->label($field2));
		}
	}

	public function numberField($field, $value)
	{
		if (!is_numeric($value)) {
			$this->setError($field, $this->label($field)) . 'Please enter only numbers.';
		}
	}

















}
