<?php
class Invoice{
	private $name;
	private $type;
  private $addr;
  private $phone;
	private $id;
	private $date;

    public function _construct(){
        $this->name = "";
        $this->type = "";
				$this->phone = "";
        $this->addr = "";
				$this->id = "";
				$this->date = "";
    }
	public function setName($name){
        $this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
  public function setType($type){
		if($type == "private"){
			$this->type = "personal";
		}else{
			$this->type = "corporation";
		}
  }
  public function getType(){
    return $this->type;
  }
  public function setAddr($addr){
        $this->addr = $addr;
  }
  public function getAddr(){
    return $this->addr;
  }
  public function setPhone($phone){
        $this->phone = $phone;
  }
  public function getPhone(){
    return $this->phone;
  }
	public function setID($id){
        $this->id = $id;
  }
  public function getID(){
    return $this->id;
  }
	public function setDate($date){
        $this->date = $date;
  }
  public function getDate(){
    return $this->date;
  }
}
?>
