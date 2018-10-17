<?php

class MembersController extends Controller{

	public $postObject;

   	public function view($uID){

		$this->postObject = new User();
		$user = $this->postObject->getUser($uID);
	  	$this->set('user',$user);

   	}

	public function defaultTask(){

		$this->postObject = new User();
		$users= $this->postObject->getAllUsers();
		$this->set('title', 'The Default Blog View');
		$this->set('users',$users);

	}


}
