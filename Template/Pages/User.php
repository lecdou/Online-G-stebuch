<?php
class User
{
    private $id;
	private $password;
	private $email;
	public function __construct() {
		$this->password = $password;
        $this->email = $email;
        $this->id=$id;
    }
    public function getId(){
		return $this->id; 
	}
	public function getPassword(){
		return $this->pasword; 
	}
	public function getEmail(){
		return $this->email; 
	}

}
?>