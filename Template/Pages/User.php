<?php
class User
{
    private $id;
	private $password;
	private $email;
	private $username;
	public function __construct() {
		$this->password = $this->PASSWORD;
        $this->email = $this->EMAIL;
		$this->id= $this->ID;
		$this->username= $this->USERNAME;
    }
    public function getId(){
		return $this->id; 
	}
	public function getPassword(){
		return $this->password; 
	}
	public function getEmail(){
		return $this->email; 
	}
	public function getUsername(){
		return $this->username;
	}

}
?>