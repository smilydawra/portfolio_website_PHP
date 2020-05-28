<?php

/**
 * CourseModel class is child class
 * of Model class
 */
class CourseModel extends Model
{
	protected $table = 'course';
	protected $key = 'id';

	/**
		 * function to retrieve DISTINCT values from
		 * course table
	 */
	public function distinct()
	{
		$query = "SELECT DISTINCT id,name from course";
		$stmt = static::$dbh->query($query);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}
