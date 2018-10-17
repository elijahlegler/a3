<?php
class User extends Model{

	function getUser($uID){

		$sql =  'SELECT uID, first_name, last_name, email FROM users WHERE pID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($uID));

		$post = $results;

		return $post;

	}

	public function getAllUsers($limit = 0){

		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}

		$sql =  'SELECT uID, first_name, last_name, email FROM users'.$numposts;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;

	}

	public function addUser($data){

		$sql='INSERT INTO users (email, password, first_name, last_name) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;

	}


}
