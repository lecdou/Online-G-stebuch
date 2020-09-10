<?php
class User
{
    private $id;
	private $titel;
    private $content;
    private $date;
    private $userId;
	public function __construct($id,$titel,$content,$date,$userId) {
        $this->id=$id;
        $this->titel = $titel;
        $this->content = $content;
        $this->date=$date;
        $this->userId = $userId;
    }
    public function getId(){
		return $this->id; 
	}
	public function gettitel(){
		return $this->titel; 
	}
	public function getcontent(){
		return $this->content; 
    }
    public function getdate(){
		return $this->date; 
    }
    public function getuserId(){
		return $this->userId; 
	}

}
?>