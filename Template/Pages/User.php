<?php
class User
{
    private $id;
	private $password;
	private $email;
	public function __construct() {
		$this->password = $this->PASSWORD;
        $this->email = $this->EMAIL;
        $this->id= $this->ID;
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

}
?>