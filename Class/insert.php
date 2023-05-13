<?php
/**
 *
 */
 # This is The sub class or Child Class and Config is the super class.
class insert extends Config
{
  # Characteristics or Properties
  public $task;

  public function __construct($task)
  {
    $this->task = $task;
  }

  public function insertTask(){
    $con = $this->con();
    $sql = "INSERT INTO `tbl_todolist`(`item`)VALUES('$this->task')";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}

?>
