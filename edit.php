<?php
include "db_conn.php";

if (isset($_POST["edit"])) {
  $id = $_POST["id"];
  $title = $_POST['title_book'];
  $doe = $_POST['doe_book'];
  $copies = $_POST['copies_book'];
  $sql = "UPDATE books SET title_book='$title',doe_book='$doe',copies_book='$copies' WHERE id_book = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




