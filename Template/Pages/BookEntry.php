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
        $this->id=intval($this->ID);
        $this->date = intval($this->DATE);
        $this->userId =  intval($this->USERID);

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