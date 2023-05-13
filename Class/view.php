<?php
/**
 *
 */
class view extends Config
{

  public function viewData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING'";
    $data = $con->prepare($sql);
    $data->execute();
    # fetchAll - kukuhain lahat ng data na nasa table then e coconvert into array then e papasaok sa result.
    # kukuhain lahat ng data na nasa table
    # tr - table rows.
    # th - table head.
    # td - table data.
    # <a></a> - anchor tag.
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<h3>Pending Task</h3>";
    echo "<table class='table table-dark table-striped table-sm'>";
    echo "<thead>
            <tr>
              <th> Task Items </th>
              <th> Action </th>
            </tr>
         </thead><tbody>";
         # Gagamit ng foreach para makuha yung laman ng result.
         foreach ($result as $results) {
           echo "<tr>";
           echo "<td>$results[item]</td>";
           echo "<td>
                  <a class='btn btn-success btn-sm' href='index.php?edit=$results[id]'>Edit</a>
                  <a class='btn btn-danger btn-sm' href='index.php?delete=$results[id]'>Delete</a>
                </td>";
           echo "</tr>";
         }
    echo "</tbody></table>";
  }

  public function viewCompletedData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
    $data = $con->prepare($sql);
    $data->execute();
    # fetchAll - kukuhain lahat ng data na nasa table then e coconvert into array then e papasaok sa result.
    # kukuhain lahat ng data na nasa table
    # tr - table rows.
    # th - table head.
    # td - table data.
    # <a></a> - anchor tag.
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<h3 class='mb-4 mt-5'>Completed Task</h3>";
    echo "<table class='table table-dark table-striped table-sm'>";
    echo "<thead>
            <tr>
              <th> Task Items </th>
              <th> Date Completed</th>
            </tr>
         </thead><tbody>";
         # Gagamit ng foreach para makuha yung laman ng result.
         foreach ($result as $results) {
           echo "<tr>";
           echo "<td>$results[item]</td>";
           echo "<td>$results[date_completed]</td>";
           echo "</tr>";
         }
    echo "</tbody></table>";
  }
}
?>
