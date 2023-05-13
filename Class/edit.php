<?php
/**
 *
 */
class edit extends Config
{
  # Characteristics
  public $id;

  # This is Magic Method
  public function __construct($id)
  {
    $this->id = $id;
  }

  # This is method
  public function editTask(){
    $con = $this->con();
    $sql = "UPDATE `tbl_todolist` SET `status` = 'COMPLETED',`date_completed`=NOW() WHERE `id` = '$this->id'";
    $data = $con->prepare($sql);
    if ($data->execute()) {
      return true;
    }else{
      return false;
    }
  }
}

?>
