<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   
   $title = $_POST['title_book'];
   $doe = $_POST['doe_book'];
   $copies = $_POST['copies_book'];
   
   $sql = "INSERT INTO books  VALUES (null,'$title','$doe','$copies')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




