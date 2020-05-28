<?php

/**
 * CommentsModel class is child class
 * of Model class
 */
class CommentsModel extends Model
{
	protected $table = 'comments';
	protected $key = 'id';

	/**
		 * function is to fetch all results from
		 * comments table
	 */
	public function commentAll()
	{
		$query = 'SELECT comments.*,
				user.first_name as first_name,
				user.last_name as last_name,
				project.title as project_title
				FROM
				comments
				JOIN user on comments.user_id = user.id
				JOIN project on comments.project_id = project.id';

		$stmt = static::$dbh->query($query);

		$result =  $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	/**
		 * function is to fetch one record FROM
		 * comments table
		 * @param number $id
	 */
	public function commentOne($id)
	{
		$query = 'SELECT comments.*,
				user.first_name as User,
				project.title as Project_Title
				from
				comments
				JOIN user USING(id)
				JOIN project using(id)
				WHERE id = :id';

		$stmt = static::$dbh->prepare($query);
		$params = array(
			':id' => $id
		);
		$stmt->execute($params);
		$result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}
