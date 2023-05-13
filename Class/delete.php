<?php
/**
 *
 */
class delete extends Config
{
  # Characteristics
  public $id;

  # This is Magic Method
  public function __construct($id)
  {
    $this->id = $id;
  }

  # This is method
  public function deleteTask(){
    $con = $this->con();
    $sql = "DELETE FROM `tbl_todolist` WHERE `id` = '$this->id'";
    $data = $con->prepare($sql);
    if ($data->execute()) {
      return true;
    } else {
      return false;
    }


  }
}

?>
