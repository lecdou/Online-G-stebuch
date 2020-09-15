<?php
class BookEntry
{
    private $id;
	  private $titel;
    private $content;
    private $date;
    private $userId;
    private $email;
	public function __construct() {
        $this->id=$id;
        $this->titel = $titel;
        $this->content = $content;
        $this->date = $date;
        $this->userId = $userId;
    }
    public function getId(){
		return $this->id; 
	  }
	  public function getTitel(){
		return $this->titel; 
	  }
	  public function getContent(){
		return $this->content; 
    }
    public function getDate(){
		return $this->date; 
    }
    public function getUserId(){
		return $this->userId; 
    }
    public function getUserEmail()
    {
    return $this->email;
    }

}
?>