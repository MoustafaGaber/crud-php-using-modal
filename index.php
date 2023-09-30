<?php
include "db_conn.php";
function getalldata(){
  global $conn;
  $sql = "SELECT * FROM books";
        $result = mysqli_query($conn, $sql);
        return $result;
}

include "modal.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5 mt-3" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <!-- <a href="add-new.php"  class="btn btn-dark mb-3">Add New</a> -->
    <a type="button" data-bs-toggle="modal" data-bs-target="#addexampleModal" class="btn btn-dark mb-3">Add New</a>
    
    <table class="table table-hover text-center">
      <thead class="table-dark " >
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title Book</th>
          <th scope="col">DATE OF EDITION</th>
          <th scope="col">NUMBER OF COPIES</th>
          <th scope="col">Action</th>
          
          
        </tr>
      </thead>
      <tbody>
        <?php
        // $sql = "SELECT * FROM books";
        // $result = mysqli_query($conn, $sql);

        $result=getalldata(); //function that feach data from database
        //while ($row = mysqli_fetch_assoc($result)) {
          foreach($result as $row) {
        ?>
          <tr>
            <td><?php echo $row["id_book"] ?></td>
            <td><?php echo $row["title_book"] ?></td>
            <td><?php echo $row["doe_book"] ?></td>
            <td><?php echo $row["copies_book"] ?></td>
           
            <td>
              <!-- <a href="edit.php?id=<?php //echo $row["id_book"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> -->
              <a type="button" data-bs-toggle="modal" data-bs-target="#editexampleModal<?php echo $row["id_book"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>


              <a type="button" class="btn btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row["id_book"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
              <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->
            </td>
  
          </tr>
           

<!-- Modal -->
<?php include "modal.php"; ?>
         
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
   

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>