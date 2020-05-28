<?php

/**
 * ProjectModel class is child class
 * of Model class
 */
class ProjectModel extends Model
{
	protected $table = 'project';
	protected $key = 'id';

	/**
		 * function to retrieve all records from
		 * project table
	 */
	public function projectAll()
	{
		$query = 'SELECT project.*,
				course.name as Course_name,
				course.teacher_name as Teacher
				FROM
				project
				JOIN course on project.course_id = course.id
				ORDER BY id ASC';

		$stmt = static::$dbh->query($query);

		$result =  $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	/**
		 * function to retrieve one record
		 * from project table
		 * @param number $id
	 */
	public function projectOne($id)
	{
		$query = 'SELECT project.*,
				course.name as Course_name,
				course.teacher_name as Teacher
				FROM
				project
				JOIN course on project.course_id = course.id
				WHERE project.id = :id
				ORDER BY id ASC';

				$stmt = static::$dbh->prepare($query);
				$params = array(
					':id' => $id
				);
				$stmt->execute($params);
				$result =  $stmt->fetch(PDO::FETCH_ASSOC);
				return $result;
	}

	/**
		 * function to update one record
		 * from project table
		 * @param number $id
	 */
	public function updateProject($id)
	{
		$query = 'UPDATE project
					JOIN course on project.course_id = course.id
					SET
					project_number = :project_number,
					title = :title,
					summary = :summary,
					details = :details,
					image = :image,
					image_desc = :image_desc,
					type = :type,
					link = :link,
					is_commented = :is_commented,
					course_id = :course_id,
					updated_at = NOW()
					WHERE
					project.id = :id';

		$stmt = static::$dbh->prepare($query);
		$params = array(
			':project_number' => $_POST['project_number'],
			':title' => $_POST['title'],
			':summary' => $_POST['summary'],
			':details' => $_POST['details'],
			':image' => $_POST['image'],
			':image_desc' => $_POST['image_desc'],
			':type' => $_POST['type'],
			':link' => $_POST['link'],
			':is_commented' => $_POST['is_commented'],
			':course_id' => $_POST['course_id'],
			':id' => $_POST['id']
		);
		$stmt->execute($params);
		// $result = $stmt->fetch(PDO::FETCH_OBJ);
		// return $result;
		$result = $stmt->rowCount();
		return $result;
	}

	/**
		 * function to retreive all the matching
		 * data from search value - project table
		 * @param string $searchterm
	 */
	public function getAllProjectsBySearch($searchterm)
	{
		$query = 'SELECT project.*,
				course.name as Course_name
				FROM
				project
				JOIN course on project.course_id = course.id
				WHERE
				project.title LIKE :searchterm1
				OR
				project.type LIKE :searchterm2
				ORDER BY project.title ASC';

		$stmt = static::$dbh->prepare($query);

		$params = array(
			':searchterm1' => "%{$searchterm}%",
			':searchterm2' => "%{$searchterm}%"
		);

		$stmt->execute($params);


		$result  = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	/**
		 * function to add a new project in the
		 * project table
	 */
	public function addProject()
	{
		$query = 'INSERT INTO project
					(project_number,title,summary,details,image,image_desc,
						type,link,is_commented,course_id)
					VALUES
					(:project_number, :title, :summary, :details, :image,
						 :image_desc, :type, :link, :is_commented, :course_id)';

		//prepare query
		$stmt = static::$dbh->prepare($query);

		//binding the parameters
		$params = array(
			':project_number' => $_POST['project_number'],
			':title' => $_POST['title'],
			':summary' => $_POST['summary'],
			':details' => $_POST['details'],
			':image' => $_POST['image'],
			':image_desc' => $_POST['image_desc'],
			':type' => $_POST['type'],
			':link' => $_POST['link'],
			':is_commented' => $_POST['is_commented'],
			':course_id' => $_POST['course_id']
		);

		//execute the query
		$stmt->execute($params);

	}

	public function deleteProject($id)
	{
		$query = 'DELETE FROM project
		 			WHERE
					project.id = :id';

		$stmt = static::$dbh->prepare($query);

		$params = array(
			':id' => $id
		);

		$stmt->execute($params);

		//$result = $stmt->fetch(PDO::FETCH_ASSOC);

		$result = $stmt -> rowCount();

		return $result;

	} // end-of-deleteProject()


}
